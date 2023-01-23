<?php

namespace App\Models;

use App\Models\EnsCycle;
use App\Models\Enseignement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cycle extends Model
{
    use HasFactory;
    public function enseignement()
    {
        return $this->belongsTo(Enseignement::class);
    }

    public function EnsCycle()
    {
        return $this->hasMany(EnsCycle::class);
    }
}
