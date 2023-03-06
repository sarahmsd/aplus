<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Wildside\Userstamps\Userstamps;

class Employeur extends Model
{
    use HasFactory, Notifiable, Userstamps;

    protected $fillable = [
        'user_id',
        'nom',
        'email',
        'adress',
        'email',
        'tel',
        'domaineActivité',
        'description',
        'photo'
    ];


    public function offres()
    {
        return $this->hasMany(Offre::class, 'offres');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'employeur_role');

    }
}
