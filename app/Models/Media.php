<?php

namespace App\Models;

use App\Models\Activite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;

    public function activite()
    {
        return $this->belongsTo(Activite::class);
    }
}
