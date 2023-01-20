<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratMode extends Model
{
    use HasFactory;

    public function offres()
    {
        return $this->belongsToMany(Offre::class, 'contrat_mode_offre', 'contrat_mode_id', 'offre_id');
    }

}
