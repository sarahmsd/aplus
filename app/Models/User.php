<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Ecole;
use App\Models\Projet;
use App\Models\Candidat;
use App\Models\Conversation;
use App\Models\Investisseur;
use App\Models\Investissement;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Wildside\Userstamps\Userstamps;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Userstamps, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'profil',
        'password',
        'oauth_id',
        'oauth_type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function candidat()
    {
        return $this->hasOne(Candidat::class);
    }
    public function ecole()
    {
        return $this->hasOne(Ecole::class);
    }

    public function investissements()
    {
        return $this->hasMany(Investissement::class);
    }

    public function investisseurs()
    {
        return $this->hasMany(Investisseur::class);
    }
    public function projets()
    {
        return $this->hasMany(Projet::class);
    }

    public function conversations()
    {
        return Conversation::where(function ($q)
        {
            return $q->where('to', $this->id)->orWhere('from', $this->id);
        });
    }

    public function getConversationsAttribute()
    {
        return $this->conversations()->get();
    }
}
