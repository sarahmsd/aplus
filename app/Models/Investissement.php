<?php

namespace App\Models;

use App\Models\User;
use App\Models\Projet;
use App\Models\Candidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Investissement extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public static function boot()
    // {
    //     parent::boot();

    //     static::creating(function($model)
    //     {
    //        $model->candidat_id = auth()->user()->id;
    //     });
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }


}
