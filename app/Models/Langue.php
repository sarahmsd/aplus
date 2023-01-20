<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'niveau',
    ];


    public function cv()
    {
        return $this->belongsToMany(Cv::class,'cv_langue');
    }

}
