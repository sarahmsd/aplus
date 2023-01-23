<?php

namespace App\Models;

use App\Models\Cycle;
use App\Models\EcoleEns;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EnsCycle extends Model
{
    use HasFactory;
    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
    }

    public function EcoleEns()
    {
        return $this->belongsToMany(EcoleEns::class);
    }
}
