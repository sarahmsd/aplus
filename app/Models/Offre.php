<?php

namespace App\Models;

use LaravelArchivable\Archivable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;
use Wildside\Userstamps\Userstamps;

class Offre extends Model
{
    use HasFactory, Archivable, Searchable, Userstamps;

    protected $fillable = [
        'employeur',
        'nom',
        'description',
        'dateLimite',
        'contrat_type',
    ];

    public function toSearchableArray()
    {
        $searchArray = [
          'nom' => $this->nom,
          'employeur' => Employeur::find($this->employeur)->nom,
          'description' => $this->description,
          'dateLimite' => $this->dateLimite,
          'contrat_type' => ContratType::find($this->contrat_type)->nom,
          'domaines' => Offre::domaines(),
          'lieux' => $this->lieux(),
          'methode_travails' => $this->methode_travails(),
          'contrat_modes' => $this->contrat_modes(),
        ];
 
        // Customize the data array...
        return $searchArray;
    }

    public function searchableAs()
    {
        return 'offres_index';
    }

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
