<?php

namespace App\Models;

use App\Models\EnsCycle;
use App\Models\Enseignement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EcoleEns extends Model
{
    use HasFactory;
    public function enseignement()
    {
        return $this->belongsTo(Enseignement::class);
    }
    public function ecoles()
    {
        return $this->belongsToMany(Ecole::class);
    }

    public function EnsCycles()
    {
        return $this->belongsToMany(EnsCycle::class);
    }
}
