<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recrutement extends Model
{
    use HasFactory, Notifiable;

   protected $fillable = [
     'offre_id',
     'candidature_id',
     'dateDebut'
   ];
}
