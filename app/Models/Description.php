<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    protected $fillable = [
        'context',
        'mission',
        'qualifications',
        'niveauExperience',
        'niveauEtude',
        'dateLimite'
    ];

    public function offres()
    {
        return $this->hasMany(Offre::class, 'offres');
    }

}
