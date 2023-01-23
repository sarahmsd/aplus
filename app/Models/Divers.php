<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divers extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'cv_id'

    ];


    public function cv()
    {
        return $this->belongsTo(Cv::class);
    }
}
