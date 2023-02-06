<?php

namespace App\Models;

use App\Models\User;
use App\Models\Activite;
use App\Models\EcoleEns;
use App\Models\Departement;
use App\Models\systemeEducatif;
use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ecole extends Model
{
    use HasFactory;
    use ElasticquentTrait;

    function getTypeName()
    {
      return null;
    }

    protected $indexSettings = [
        "settings" => [
            "analysis" => [
              "filter" => [
                "french_elision" => [
                  "type" => "elision",
                  "articles_case" => true,
                  "articles" => ["l", "m", "t", "qu", "n", "s", "j", "d", "c", "jusqu", "quoiqu", "lorsqu", "puisqu"]
                ],
                "french_synonym" => [
                  "type" => "synonym",
                  "ignore_case" => true,
                  "expand" => true,
                  "synonyms" => [
                    "salade, laitue",
                    "mayo, mayonnaise",
                    "grille, toaste"
                  ]
                ],
                "french_stemmer" => [
                  "type" => "stemmer",
                  "language" => "light_french"
                ]
            ],
            "analyzer" => [
                "french_heavy" => [
                  "tokenizer" => "icu_tokenizer",
                  "filter" => [
                    "french_elision",
                    "icu_folding",
                    "french_synonym",
                    "french_stemmer"
                  ]
                ],
                "french_light" => [
                  "tokenizer" =>  "icu_tokenizer",
                  "filter" => [
                    "french_elision",
                    "icu_folding"
                  ]
                ]
              ]
            ]
        ]
    ];

    protected $mappingProperties = [
        "ecole" => array(
            "type" => "text",
            "analyzer" => "french_light",
            "fields" => [
                "stemmed" => [
                  "type" => "text",
                  "analyzer" => "french_heavy"
                ]
            ]
        ),
        "sigle" => array(
            "type" => "text",
            "analyzer" => "french_light",
            "fields" => [
                "stemmed" => [
                  "type" => "text",
                  "analyzer" => "french_heavy"
                ]
            ]
        ),
        "adresse" => array(
            "type" => "text",
            "analyzer" => "french_light",
            "fields" => [
                "stemmed" => [
                  "type" => "text",
                  "analyzer" => "french_heavy"
                ]
            ]
        ),
        "etablissement" => array(
            "type" => "text",
            "analyzer" => "french_light",
            "fields" => [
                "stemmed" => [
                  "type" => "text",
                  "analyzer" => "french_heavy"
                ]
            ]
        ),
        "description" => array(
            "type" => "text",
            "analyzer" => "french_light",
            "fields" => [
                "stemmed" => [
                  "type" => "text",
                  "analyzer" => "french_heavy"
                ]
            ]
        ),
    ];

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
