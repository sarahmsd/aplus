<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $fillable = [
       'candidat_id',
       'modele_id',
       'postRecherche',
    ];

    public function langues()
    {
        return $this->belongsToMany(Langue::class, 'cv_langue');
    }

    public function divers()
    {
        return $this->hasMany(Divers::class);
    }

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function specialites()
    {
        return $this->belongsToMany(Specialite::class, 'cv_specialite');
    }



}
