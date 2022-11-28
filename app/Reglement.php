<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Reglement extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'titre',
        'contenu',
        'titre',
        'ladate',
        'organisme',
        'secteur',
        'contenu'       
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

   
}
