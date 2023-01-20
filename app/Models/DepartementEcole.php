<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartementEcole extends Model
{
    use HasFactory;

    public function ecole()
    {
        return $this->belongsTo(Ecole::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
