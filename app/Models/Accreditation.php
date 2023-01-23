<?php

namespace App\Models;

use App\Models\Filiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Accreditation extends Model
{
    use HasFactory;

    public function filieres()
    {
        return $this->belongsToMany(Filiere::class);
    }


}
