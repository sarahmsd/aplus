<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidature extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
     'offre_id',
     //'postulant_id',
     'profil',
     'user_id',
     'cv',
     'Linkedin',
     'message'
    ];
}
