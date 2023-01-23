<?php

namespace App\Models;

use App\Models\User;
use App\Models\Projet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Investisseur extends Model
{
    protected $guarded = [];
    use HasFactory;


    protected static function booted()
    {
        static::deleting(function ($investisseur) {
            $investisseur->projets()->detach();
        });
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projets()
    {
        return $this->belongsToMany(Projet::class);
    }
}
