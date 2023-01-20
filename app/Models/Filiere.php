<?php

namespace App\Models;

use App\Models\Departement;
use App\Models\Accreditation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filiere extends Model
{
    use HasFactory;

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }


    public function accreditations()
    {
        return $this->belongsToMany(Accreditation::class);
    }
}
