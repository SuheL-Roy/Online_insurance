<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deathclaim extends Model
{
     protected $guarded=[];



     public function policy()
    {
        return $this->belongsTo(Policy::class);
    }


 }
