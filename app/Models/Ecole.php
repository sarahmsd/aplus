<?php

namespace App\Models;

use App\Models\User;
use App\Models\Activite;
use App\Models\EcoleEns;
use App\Models\Departement;
use App\Models\systemeEducatif;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;
use Wildside\Userstamps\Userstamps;


class Ecole extends Model
{
    use HasFactory, Userstamps;

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    // public function toSearchableArray()
    // {
    //     $searchArray = [
    //       'sigle' => $this->sigle,
    //       'description' => $this->description,
    //       'adresse' => $this->adresse,
    //       'ecole' => $this->ecole,
    //       'etablissement' => $this->etablissement
    //     ];
 
    //     // Customize the data array...
    //     return $searchArray;
    //}

    public function systemeEducatif()
    {
        return $this->belongsTo(systemeEducatif::class);
    }

    public function Ecoleens()
    {
        return $this->belongsToMany(EcoleEns::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function departements()
    {
        return $this->belongsToMany(Departement::class);
    }

    public function activites()
    {
        return $this->hasMany(Activite::class);
    }

}