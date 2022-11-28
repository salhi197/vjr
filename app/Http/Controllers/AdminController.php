<?php

namespace App\Http\Controllers;

use App\Wilaya;
use App\Fichier;
use App\Telephone;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Client;
use App\Camion;
use App\Remorque;

use App\Attachement;
use App\Operation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\User;
use Carbon\Carbon;
class AdminController extends Controller
{
    
    public function admin()
    { 
        if(!Auth::guard('admin')->check()){
            return redirect()->route('login.admin');
        }
        $usersOfThisMonth = User::whereMonth('created_at',(int)date('m'))->get();
        $countUsersOfThisMonth = count($usersOfThisMonth);
        $users = User::select('id', 'created_at')
        ->get()
        ->groupBy(function($date) {
            //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });
        $usermcount = [];
        $userArr = [];
        
        foreach ($users as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }
        
        for($i = 1; $i <= 12; $i++){
            if(!empty($usermcount[$i])){
                $userArr[$i] = $usermcount[$i];    
            }else{
                $userArr[$i] = 0;    
            }
        }
        // dd($userArr);
        $sumSoldeActif = Operation::where('type',1)->sum('montant');
        //whereMonth('created_at',date('M'))->
        $sumSoldeRet = Operation::where('type',-1)->sum('montant');
        //whereMonth('created_at',date('M'))->
        $allUsers = DB::table('users')->count();
        return view('admin',compact('userArr','users','sumSoldeActif','sumSoldeRet','countUsersOfThisMonth','allUsers'));
    }

    public function saisir_frais(Request $request)
    {

    }
    //
}
