<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MethodeTravail extends Model
{
    use HasFactory;

    public function offres()
    {
        return $this->belongsToMany(Offre::class, 'methode_travail_offre', 'methode_id', 'offre_id');
    }

}
