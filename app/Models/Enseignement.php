<?php

namespace App\Models;

use App\Models\Cycle;
use App\Models\EcoleEns;
use App\Models\systemeEducatif;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enseignement extends Model
{
    use HasFactory;
    public function systemeEducatif()
    {
        return $this->belongsTo(systemeEducatif::class);
    }

    public function cycles()
    {
        return $this->hasMany(Cycle::class);
    }

    public function ecoleEnseignements()
    {
        return $this->hasMany(EcoleEns::class);
    }
}
