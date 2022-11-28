<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use DB;
use App\Operation;
use Carbon\Carbon;
use Auth;
use App\MethodeUser;
use App\Methode;
use App\Http\Requests\StoreUser;
use App\Wilaya;
use Mail;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function verifyEmail($code_email)
    {
        $user = User::where('code_email',$code_email)->first();
        if(is_null($user)){
            return redirect()->route('home')->with('success', 'Success ');        
        }else{
            $data = [
                'subject' => 'Demande Du Support',
                'name'=>$user->nom,
                'nom'=>$user->name,
                'email'=>$user->email
            ];
    
            Mail::send('bienvenue', ['data' => $data], function ($message) use ($data) {
                $message->to($data['email'])
                    ->subject('【GALAXY】Welcome ');
            });                
    
            Auth::logout();
            $user->email_verified = 1;
            $user->save();
            return redirect()->route('login')->with('success', 'Votre Email a été confirmé ');        
        }
    }

    public function demande($user_id)
    {
        $user = User::find($user_id);
        $user->verified = 2;
        $user->save();
        return redirect()->route('user.profile')->with('success', 'Success ');        
        
    }
    public function profileUpdate(Request $request,$user_id)
    {

        $user =User::find($user_id);
        $user->pays = $request['pays']; 
        $user->nom = $request['nom']; 
        $user->name = $request['name']; 
        $user->email = $request['email']; 
        $user->naissance = $request['naissance']; 
        $user->naissance = $request['naissance']; 
        // $user->adress = $request['adress']; 
        $user->telephone = $request['telephone']; 

        $user->facebook = $request['facebook']; 
        $user->linkedin = $request['linkedin']; 
        $user->telegram = $request['telegram']; 
        if($request->hasFile('identite')) {
            $path = $request->file('identite')->store('/users/identite');
            $user->identite = $path;
        }
        if($request->file('photo')) {
            $path = $request->file('photo')->store('/users/photo');
            $user->photo = $path;
        }

        $user->save();

        return redirect()->route('user.profile')->with('success', 'Success ');        
    }

    public function password(Request $request)
    {
        $user =User::find(Auth::user()->id);
        if($request->password!=$user->password_text){
            return redirect()->back()->with('error', 'Mot de passe n\'est pas correcte ');        
        }
        
        $user->password = Hash::make($request['new_password']);
        $user->password_text = $request['new_password'];
        $user->save();
        return redirect()->route('user.profile')->with('success', 'Success ');
        
    }

    public function detail($user_id)
    {
        $user =User::find($user_id);
        return view('users.detail',compact('user'));
    }

    public function pending()
    {
            
        $users =User::where('verified',2)->get();
        return view('users.pending',compact('users'));
    }


    public function index()
    {
        $users =User::all();
        return view('users.index',compact('users'));
    }


    public function actif()
    {
        $users =User::all();
        return view('users.actifs',compact('users'));
    }

    public function activer(Request $request , $user_id)
    {
        $operation = new Operation();
        $user = User::find($user_id);
        $operation->montant =$request['montant']; 
        $operation->type=3;
        $operation->etat=1;
        $operation->user=$user_id;
        $newSoldeActif = $user->solde_actif+$operation->montant;
        $operation->validated_date = Carbon::now();
        $operation->next_payment_date = Carbon::now()->addMonths(1)->addDays(1);
        $user->solde_actif = $newSoldeActif;
        $user->save();
        $operation->save();

        return redirect()->route('user.actif')->with('success', 'Valider Avec succés ');        

    }


    public function getId(Request $request)
    {
        $user = User::where('code',$request['code'])->first();
        $id = $user->id ?? 'Pas de sponsor avec ce code';
        $name = $user->name ?? 'Pas de sponsor avec ce code';
        $nom = $user->nom ?? 'Pas de sponsor avec ce code';
        
        $response = array(
            'status' => 'success',
            'id' => $id,
            'name'=>$name,
            'nom'=>$nom
        );
        return response()->json($response); 
    }


    public function valider($user_id)
    {
        $user =User::find($user_id);
        $user->verified = 1;
        $user->save();
        return redirect()->route('user.index')->with('success', 'Utilisateur Validé ');
    }


    public function profile()
    {
        $user =User::find(Auth::user()->id);
        return view('users.profile',compact('user'));
    }

    public function partenaireTable()
    {
        $users =User::where('refered_user',Auth::user()->id)->get();
        return view('users.partenaires_table',compact('users'));
    }

    

    public function partenaire()
    {
        $users =User::where('refered_user',Auth::user()->id)->get();
        return view('users.partenaires',compact('users'));
    }

    public function parrain()
    {
        $users =User::where('refered_user',Auth::user()->id)->get();
        return view('users.parrain',compact('users'));
    }    

    public function store(Request $request)
    {
        do {
            $code= mt_rand( 100000, 999999 );
        } while ( DB::table( 'users' )->where( 'code', $code )->exists() );
        $random = substr(md5(mt_rand()), 0, 35);
        $dataEmail = [
            'subject' => 'Ticket de Reservation',
            'email' => $request['email'],
            'content' => "Hi there Hhhh",
            'code'=>$random
        ];
        $email_code = substr(md5(mt_rand()), 0, 7);
        // Mail::send('email_confirmation', ['dataEmail' => $dataEmail], function ($message) use ($dataEmail) {
        //     $message->to($dataEmail['email'])
        //         ->subject('【GALAXY】Confirmez votre inscription ');
        // });                


        User::create([
            'code_email'=>$random,
            'name' => $request['name'],
            'nom' => $request['nom'],
            'email' => $request['email'],
            'pays' => $request['pays'],
            'code'=>$code,

            'naissance'=>$request['naissance'],
            'lieu'=>$request['lieu'],
            
            'telephone' => $request['telephone'],
            'refered_user'=>$request['refered_user'],
            'password' => Hash::make($request['password']),
            'password_text' => $request['password'],

        ]);
        return redirect()->route('user.index')->with('success', 'Inséré avec succés ');

    }  

    public function create()
    {
        return view('users.create');
    }

    public function update(Request $request,$id_user)
    {
        $user = User::find($id_user);
        $user->name = $request['name'];
        $user->nom = $request['nom'];
        $user->email = $request['email'];
        $user->pays = $request['pays'];
        $user->telephone = $request['telephone'];
        $user->password = Hash::make($request['password']);
        $user->password_text = $request['password'];
        $user->save();

        if(DB::table( 'users' )->where( 'code', $request->code_sponsor )->exists()){
            //$user->code = $request['code'];
            $user->refered_user = $request['refered_user'];
            $user->save();

        }else{
            return redirect()->back()->with('error', 'Code Sponsor Erroné ');
        }
        

        $user->save();
        return redirect()->route('user.index')->with('success', 'Inséré avec succés ');

    }

    /**
     * 
     * 
     * 
     * GESTION DES METHODES DE PAIEMRNT
     * 
     */

    public function methodes()
    {
        $methodes = MethodeUser::where('user',Auth::user()->id)->get();
        $_methodes = Methode::all();
        
        return view('users.methodes',compact('methodes','_methodes'));
    }
    public function methodeUserCreate(Request $request)
    {
        $methodeUser = new MethodeUser();
        $methodeUser->user = Auth::user()->id;        
        $methodeUser->methode = $request['methode'];        
        $methodeUser->value = $request['value'];
        $methodeUser->save(); 
        
        return redirect()->route('user.methodes')->with('success', 'Suppresion Terminé ');
    
    }
    
    public function updateUserMethode(Request $request,$methode)
    {
        $methodeUser = MethodeUser::find($methode);
        $methodeUser->methode = $request['methode'];        
        $methodeUser->value = $request['value'];
        $methodeUser->save(); 
        
        return redirect()->route('user.methodes')->with('success', 'Suppresion Terminé ');

    }
    public function edit($user_id)
    {
        $user = User::find($user_id);

        $parrain = User::find($user->refered_user);
        return view('users.edit',compact('user','parrain'));
    }

    public function destroyUserMethode($methode)
    {
        $methodeUser = MethodeUser::find($methode);
        $methodeUser->delete();    
        return redirect()->route('user.methodes')->with('success', 'Suppresion Terminé ');
    }

    public function delete($user_id)
    {
        $user = User::find($user_id);
        $users = User::where('refered_user', $user->id)
            ->update([
                'refered_user' => null
            ]);
        $user->delete();    
        return redirect()->route('user.index')->with('success', 'Suppresion Terminé ');
    }

    public function destroy($user_id)
    {
        $user = User::find($user_id);
        $users = User::where('refered_user', $user->id)
            ->update([
                'refered_user' => null
            ]);
        $user->delete();    
        return redirect()->route('user.methodes')->with('success', 'Suppresion Terminé ');
    }



    public function ActiverDesactiver($user_id)
    {
        $user = User::find($user_id);
        $user->type = !$user->type;
        $user->save();
        return redirect()->route('user.index')->with('success', 'Changementr d\'état');
    }
    

}
