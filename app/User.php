<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'pays',
        'code_email',
        'solde',
        'refered_user',
        'nom',
        'code',
        'password',
        'password_text'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function partenaires()
    {
        $users =User::where('refered_user',$this->id)->get();
        return $users;
    }

    public function rang()
    {
        $solde = $this->solde_actif;
        $partenaires = $this->partenaires();
        if(count($partenaires)>0){
            foreach($partenaires as $partenaire){
                $solde = $solde + $partenaire->solde_actif;
            }
        }
        // while($id!=null){
        //     $user = User::find($id);
        //     $solde = $solde+$user->solde;
        //     $id = $user->refered_user;
        // }
        if ($solde>500 and $solde<9999+5000) {
            return 1;
        }
        if ($solde>10000+5000 and $solde<50000) {
            return 2;
        }
        if ($solde>50000 and $solde<150000) {
            return 3;
        }

        if ($solde>150000 and $solde<300000) {
            return 4;
        }
        if ($solde>300000 and $solde<500000) {
            return 5;
        }
        if ($solde>500000 and $solde<1000000) {
            return 6;
        }
        if ($solde>1000000 and $solde<2000000) {
            return 7;
        }
        if ($solde>2000000 and $solde<5000000) {
            return 8;
        }
        if ($solde>5000000 and $solde<10000000) {
            return 9;
        }
        /////////////////////////////////////////////// 
        return 1;
    }


    public function rangName()
    {
        $solde = $this->solde_actif;
        $partenaires = $this->partenaires();
        if(count($partenaires)>0){
            foreach($partenaires as $partenaire){
                $solde = $solde + $partenaire->solde_actif;
            }
        }
        if ($solde>500 and $solde<9999+5000+10000) {
            return "beginner";
        }
        if ($solde>10000+5000+10000 and $solde<50000) {
            return "consultant";
        }
        if ($solde>50000 and $solde<150000) {
            return "supervisor";
        }

        if ($solde>300000 and $solde<500000) {
            return "elite";
        }
        if ($solde>1000000 and $solde<2000000) {
            return "manager";
        }
        if ($solde>2000000 and $solde<5000000){
            return "";
        }
        if ($solde>5000000 and $solde<10000000) {
            return "diamond king";
        }
        /////////////////////////////////////////////// 
        return "";
    }

    public function parrain()
    {
        $user = User::find($this->refered_user);
        return $user;
    }


    public function pourcentage()
    {
        $user = User::find($this->id);
        $solde = $user->solde_actif;
        $usersSumSolde =User::where('refered_user',$this->id)->get()->sum('solde_actif');
        $soldeTotal = $solde+$usersSumSolde;

        $pourcentage = round($soldeTotal*100/$user->NextRang(), 2);
        return $pourcentage;

    }

    public function NextRang()
    {
        $solde = $this->solde_actif;
        $partenaires = $this->partenaires();
        if(count($partenaires)>0){
            foreach($partenaires as $partenaire){
                $solde = $solde + $partenaire->solde_actif;
            }
        }
        if ($solde>500 and $solde<9999+5000) {
            return 9999+5000;
        }
        if ($solde>10000+5000 and $solde<50000) {
            return 24999+5000;
        }
        if ($solde>50000 and $solde<150000) {
            return 49999+5000;
        }

        if ($solde>150000 and $solde<300000) {
            return 99999+5000;
        }
        if ($solde>300000 and $solde<500000) {
            return 249999+5000;
        }
        if ($solde>500000 and $solde<1000000) {
            return 499999+5000;
        }
        if ($solde>1000000 and $solde<2000000) {
            return 999999+5000;
        }
        if ($solde>2000000 and $solde<5000000) {
            return 999999+5000;
        }
        if ($solde>5000000 and $solde<10000000) {
            return 999999+5000;
        }
        return 1;
    }

    public function finalSolde()
    {
        $solde = $this->solde_actif;
        $partenaires = $this->partenaires();
        if(count($partenaires)>0){
            foreach($partenaires as $partenaire){
                $solde = $solde + $partenaire->solde_actif;
            }
        }
        return $solde;
    }
}
