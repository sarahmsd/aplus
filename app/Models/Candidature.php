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

    public function offre()
    {
        return $this->belongsTo(Offre::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');

    }
}
