<?php

namespace App\Models;

use App\Models\User;
use App\Models\Activite;
use App\Models\EcoleEns;
use App\Models\Departement;
use App\Models\systemeEducatif;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ecole extends Model
{
    use HasFactory;

    public function systemeEducatif()
    {
        return $this->belongsTo(systemeEducatif::class);
    }

    public function Ecoleens()
    {
        return $this->belongsToMany(EcoleEns::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function departements()
    {
        return $this->belongsToMany(Departement::class);
    }

    public function activites()
    {
        return $this->hasMany(Activite::class);
    }

}
