<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;

    public function offres()
    {
        return $this->belongsToMany(Offre::class, 'domaine_offre', 'domaine_id', 'offre_id');
    }

}
