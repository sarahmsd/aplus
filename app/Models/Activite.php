<?php

namespace App\Models;

use App\Models\Ecole;
use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activite extends Model
{
    use HasFactory;

    public function ecole()
    {
        return $this->belongsTo(Ecole::class);
    }

    public function medias()
    {
        return $this->hasMany(Media::class);
    }
}
