<?php

namespace App\Models;

use App\Models\Projet;
use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conversation extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }



}
