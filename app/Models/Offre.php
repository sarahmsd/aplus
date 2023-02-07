<?php

namespace App\Models;

use LaravelArchivable\Archivable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offre extends Model
{
    use HasFactory, Archivable;

    protected $fillable = [
        'employeur',
        'nom',
        'description',
        'dateLimite',
        'contrat_type',
    ];

    public function domaines()
    {
        return $this->belongsToMany(Domaine::class, 'domaine_offre');
    }

    public function lieux()
    {
        return $this->belongsToMany(Lieu::class, 'lieu_offre');
    }

    public function methode_travails()
    {
        return $this->belongsToMany(MethodeTravail::class, 'methode_travail_offre');
    }

    public function contrat_modes()
    {
        return $this->belongsToMany(ContratMode::class, 'contrat_mode_offre');
    }

    public function contratType()
    {
        return $this->belongsTo(ContratType::class, 'contrat_type');
    }

    public function employeur()
    {
        return $this->belongsTo(Employeur::class, 'employeur');
    }
    public function candidatures()
    {
        return $this->hasMany(Candidature::class);
    }


}
