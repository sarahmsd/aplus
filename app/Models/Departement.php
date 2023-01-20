<?php

namespace App\Models;

use App\Models\Ecole;
use App\Models\Filiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;
    public function ecoles()
    {
        return $this->belongsToMany(Ecole::class);
    }


    public function filieres()
    {
        return $this->hasMany(Filiere::class);
    }
}
