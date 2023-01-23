<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function candidats()
    {
        return $this->belongsToMany(Candidat::class, 'candidat_role');
    }

    public function entreprises()
    {
        return $this->belongsToMany(Employeur::class, 'employeur_role');
    }
}
