<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //
    protected $fillable = ['api_token',
        'nom','prenom', 'email', 'password','grp','mat','annee'
    ];

}
