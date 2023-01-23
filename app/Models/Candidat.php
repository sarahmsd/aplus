<?php

namespace App\Models;

use App\Models\Role;
use App\Models\User;
use App\Models\Projet;
use App\Models\Investissement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidat extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
      'user_id',
      'nom',
      'adress',
      'email',
      'tel',
      'photo',
      'prenom'
    ];

    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class, 'candidat_role');

    // }

    public function projets()
    {
        return $this->hasMany(Projet::class);
    }


    public function user()
    {
        return $this->hasOne(User::class);
    }
}
