<?php

namespace App\Http\Controllers;

use App\Operation;
use Mail;
use Auth;
use Dompdf\Dompdf;
use App\User;
use App\Template;
use Carbon\Carbon;
use App\Remorque;
use Illuminate\Http\Request;

class OperationController extends Controller
{

    public function certificat2($operation)
    {
        dd('A . L . Z . P');
    }


    public function certificat($operation)
    {
        $operation = Operation::find($operation);
        $user = User::find($operation->user);
        $dompdf = new Dompdf();
        $html = Template::certificat($user,$operation);
        $contxt = stream_context_create([
            'ssl' => [
            'verify_peer' => FALSE,
            'verify_peer_name' => FALSE,
            'allow_self_signed'=> TRUE
            ]
        ]);
        $dompdf = $dompdf->set_options(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $dompdf->setHttpContext($contxt);        
        $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4');
        $customPaper = array(0,0,690,492);
        $dompdf->set_paper($customPaper);        
        $dompdf->render();        
        $dompdf->stream("certificat.pdf", array("Attachment" =>1));
    }


    public function index()
    {
        if(Auth::guard('admin')->check()){
            $operations = Operation::all();
            return view('operations.index',compact('operations'));    
        }
        if(Auth::check()){
            $operations = Operation::where('user',Auth::user()->id)->get();
            return view('operations.index',compact('operations'));    
        }
    }

    public function transfererBalanceShow()
    {
        return view('operations.from_retrait_to_balance');

    }
    
    public function transfererBalanceAction(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->solde = $user->solde - $request->montant;
        $sender_user->save(); 
        return redirect()->back()->with('success', 'Valider Avec succés ');  
    }
    public function indexRechargementActif()
    {
        if(Auth::guard('admin')->check()){
            $operations = Operation::where('type',1)->get();
            return view('operations.index_recharger',compact('operations'));    
        }
        if(Auth::check()){
            $operations = Operation::where('etat',1)->where('type',3)->where('user',Auth::user()->id)->get();
            return view('operations.index_recharger',compact('operations'));    
        }
    }

    public function indexRechargement()
    {
        if(Auth::guard('admin')->check()){
            $operations = Operation::where('type',1)->get();
            return view('operations.index_recharger',compact('operations'));    
        }
        if(Auth::check()){
            $operations = Operation::where('type',1)->where('user',Auth::user()->id)->get();

            return view('operations.index_recharger',compact('operations'));    
        }
    }

    public function activerShow()
    {
        return view('operations.activer');
    }
    public function activerAction(Request $request)
    {
        $operation = new Operation();
        $user = User::find(Auth::user()->id);
        if($request['montant']>$user->solde){
            return redirect()->back()->with('error', 'Le montant a dépassé  ');                    
        }

        $operation->montant =$request['montant']; 
        $operation->type=3;
        $operation->etat=1;
        $operation->user=Auth::user()->id;
        // $operation->save();
        /**
         * 
         */

        $newSolde = $user->solde-$operation->montant;
        $newSoldeActif = $user->solde_actif+$operation->montant;
        $operation->validated_date = Carbon::now();
        $operation->next_payment_date = Carbon::now()->addMonths(1)->addDays(1);
        $user->solde = $newSolde;
        $user->solde_actif = $newSoldeActif;
        $user->save();
        $operation->save();

        return redirect()->route('operation.recharger.index.actif')->with('success', 'Valider Avec succés ');        
    }

    public function indexActif()
    {
        if(Auth::guard('admin')->check()){
            $operations = Operation::where('type',3)->get();
            return view('operations.index_actif',compact('operations'));    
        }
        if(Auth::check()){
            $operations = Operation::where('etat',1)->where('type',3)->where('user',Auth::user()->id)->get();
            return view('operations.index_actif',compact('operations'));    
        }
    }

    public function rechargerShow()
    {
        return view('operations.recharger');
    }    

    public function rechargerShowAgent()
    {
        $users = User::all();
        return view('operations.recharger_agent',compact("users"));
    }    
    
    public function rechargerAction(Request $request)
    {

        $operation = new Operation();
        $operation->montant =$request['montant']; 
        $operation->methode =$request['methode']; 
        $operation->type=1;
        $operation->etat=0;
        $operation->user=Auth::user()->id;
        $operation->save();
        // return redirect()->route('operation.recharger.index')->with('success', 'Inséré avec succés ');        
        $montant =$request['montant']; 
        $methode =$request['methode']; 
        $adress = "";
        
        $photo = "";
        if($methode=="payeer"){
            $photo = "payeer";
            $adress = "P1066536669";
        }
        if($methode=="btc"){
            $photo = "btc";
            $adress = "0x4dfa421259901c9a0d5f7f31d514f429d077deb4";
        }
        if($methode=="usdt_trc20"){
            $photo = "usdt_trc20";
            $adress = "TUVoQDLiJS8ZNpeLpCg2JxsBAPiVtxVHUa";
        }
        if($methode=="usdt_erc20"){
            $photo = "usdt_erc20";
            $adress = "0x4dfa421259901c9a0d5f7f31d514f429d077deb4";
        }

        return view('operations.rechargement',compact('montant','methode','adress'));

    }    


    public function rechargerActionAgent(Request $request)
    {

        $operation = new Operation();
        $operation->montant =$request['montant']; 
        $operation->methode =$request['methode']; 
        $operation->type=1;
        $operation->etat=0;
        $operation->user=$request['user'];
        $user = User::find($request['user']);
        $operation->save();
        $montant =$request['montant']; 
        $methode =$request['methode']; 
        $adress = "";

        $photo = "";
        if($methode=="payeer"){
            $photo = "payeer";
            $adress = "P1066536669";
        }
        if($methode=="btc"){
            $photo = "btc";
            $adress = "0x4dfa421259901c9a0d5f7f31d514f429d077deb4";
        }
        if($methode=="usdt_trc20"){
            $photo = "usdt_trc20";
            $adress = "TUVoQDLiJS8ZNpeLpCg2JxsBAPiVtxVHUa";
        }
        if($methode=="usdt_erc20"){
            $photo = "usdt_erc20";
            $adress = "0x4dfa421259901c9a0d5f7f31d514f429d077deb4";
        }

        return view('operations.rechargement_agent',compact('montant','methode','adress','user'));

    }    



    public function rechargerValider($operation)
    {
        $operation = Operation::find($operation);
        $user = User::find($operation->user);
        $montant = $user->solde+$operation->montant;
        $operation->validated_date = Carbon::now();
        $operation->confirmed = 1;//Carbon::now();
        // $operation->next_payment_date = Carbon::now()->addMonths(1);
        $user->solde = $montant;
        $user->save();

        $operation->etat = 1;
        $operation->save();
        return redirect()->back()->with('success', 'Valider Avec succés ');        

    }

    public function rechargerAnnuler($operation)
    {
        $operation = Operation::find($operation);
        $operation->etat = -1;
        $operation->save();
        return redirect()->back()->with('success', 'Annuler Avec succés ');        
    }

    public function retirerAnnuler($operation)
    {
        $operation = Operation::find($operation);
        $operation->etat = -1;
        $operation->save();
        return redirect()->back()->with('success', 'Annuler Avec succés ');        
    }    

    /**
     * 
     */


    public function indexTransfert()
    {
        $operations = Operation::where('type',2)->get();
        return view('operations.index_transfert',compact('operations'));

    }
    public function transfererShow()
    {
        $operations = Operation::where('type',-1)->where('user',Auth::user()->id)->where('confirmed','<>',1)->get();
        $countOperations = count($operations);
        return view('operations.transferer',compact('countOperations'));
    }    
    public function transfererAction(Request $request)
    {
        $sender_user = User::find(Auth::user()->id);
        if($request['identifiant'] == "telephone"){
            $received_user  = User::where("telephone",$request['email_or_telephone'])->first();
        }
        if($request['identifiant'] == "email"){
            $received_user  = User::where("email",$request['email_or_telephone'])->first();
        }else{
            return redirect()->back()->with('error', 'Erreur Inconnu ');        
        }
        if(is_null($received_user)){
            return redirect()->back()->with('error', 'Reveiver not found ');        
        }
        if($received_user->id == Auth::user()->id){
            return redirect()->back()->with('error', 'Ereur 209');        
        }
        if($sender_user->solde<$request['montant']){
            return redirect()->back()->with('error', 'Motant Dépassé');        
        }
        $code= mt_rand( 100000, 999999 );

        $operation = new Operation();
        $operation->montant =$request['montant']; 
        $operation->type=2;
        $operation->etat=0;
        $operation->code_confirmation=$code;
        $operation->user=Auth::user()->id;
        $operation->user_2=$received_user->id;//Auth::user()->id;
        $operation->save();

        // $sender_user->solde = $sender_user->solde - $request['montant'];
        $sender_user->save(); 
        /**
         * décrementer le solde de user 2
        */
        // $received_user->solde = $received_user->solde + $request['montant'];
        $received_user->save(); 
        /**
         * SEND MAIL
         */
        $data = [
            'subject' => 'Code de confirmation de transfert',
            'email' => $sender_user->email,
            'content' => "",
            'code'=>$code
        ];

        Mail::send('confirmation_transfert', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])
                ->subject('Confirmation de Transfert');
        });                

        return redirect()->route('operation.confirmer',['operation'=>$operation->id])->with('success', 'Inséré avec succés ');        
    }    
    public function transfererConfirmer($operation)
    {
        $operation = Operation::find($operation);

        return view('operations.transfert_confirmer',compact('operation'));    

    }

    public function transfererConfirmerAction(Request $request,$operation)
    {
        $operation = Operation::find($operation);
        if($operation->confirmed){
            return redirect()->route('home')->with('error', 'Transfert Déja efféctué ');        
        }
        /**
         * check if it is not confirmed 
        */
        if($operation->code_confirmation!=$request['code_confirmation']){
            return redirect()->back()->with('error', 'Code de confirmation incorrecte !');        
        }else{
            $sender_user = User::find(Auth::user()->id);
            $operation->etat=1;
            $operation->save();    
            $sender_user->solde = $sender_user->solde - $operation->montant;
            $sender_user->save(); 
            $received_user  = User::find($operation->user_2);
            /**
             * décrementer le solde de user 2
            */
            $received_user->solde = $received_user->solde + $operation->montant;
            $received_user->save(); 
            return redirect()->route("home")->with('success', 'Transfert Confirmé  !');        
                
        }

    }

    /**
     * 
     * 
     * 
     * 
     */

    public function indexRetrait()
    {
        if(Auth::guard('admin')->check()){
            $operations = Operation::where('type',-1)->get();
            return view('operations.index_retirer',compact('operations'));    
        }
        if(Auth::check()){
            $operations = Operation::where([
                ['type'=>-1],
                ['user'=>Auth::user()->id]
                ]
            )->get();
        return view('operations.index_recharger',compact('operations'));    
        }
    }

    public function retirerShow()
    {
        $operations = Operation::where('type',-1)->where('user',Auth::user()->id)->where('confirmed','<>',1)->get();
        $countOperations = count($operations);
        return view('operations.retirer',compact('countOperations'));
    }    
    public function retirerAction(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if($request['montant']>$user->solde_retrait){
            return redirect()->back()->with('success', 'Vous pouvez pas retirer un tel montant ');        
        }
        $operation = new Operation();
        $operation->montant =$request['montant']; 
        $operation->methode =$request['methode']; 
        $operation->type=-1;
        $operation->etat=0;
        $operation->user=Auth::user()->id;
        $operation->save();
        $montant =$request['montant']; 
        $methode =$request['methode']; 
        $adress = "";
        return view('operations.retrait',compact('montant','methode','adress'));
    }    

    public function retirerValider($operation)
    {
        $operation = Operation::find($operation);
        $user = User::find($operation->user);
        $montant = $user->solde_retrait-$operation->montant;
        $operation->validated_date = Carbon::now();
        $operation->confirmed = 1;
        $operation->etat = 1;        
        $user->solde_retrait = $montant;
        $user->save();

        $operation->etat = 1;
        $operation->save();
        return redirect()->back()->with('success', 'Valider Avec succés ');        

    }


    public function filter()
    {
        dd('za');
    }

}
