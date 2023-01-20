<?php

namespace App\Models;

use App\Models\User;
use App\Models\Candidat;
use App\Models\Investisseur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projet extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeOnline($query)
    {
        return $query->where('status',1);
    }

   public function user()
   {
       return $this->belongsTo(User::class);
   }

   public function investisseurs()
   {
       return $this->belongsToMany(Investisseur::class);
   }
}
