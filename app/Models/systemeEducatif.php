<?php

namespace App\Models;

use App\Models\Ecole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class systemeEducatif extends Model
{
    use HasFactory;

    public function ecoles()
    {
        return $this->hasMany(Ecole::class);
    }
    public function enseignements()
    {
        return $this->hasMany(Enseignement::class);
    }
}
