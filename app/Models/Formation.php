<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'lieu',
        'etablissement',
        'dateDebut',
        'dateFin',
        'description',
        'cv_id'
    ];

    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }
}
