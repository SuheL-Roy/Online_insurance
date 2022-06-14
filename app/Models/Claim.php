<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $guarded=[];


     public function policy()
    {
        return $this->belongsTo(Policy::class);
    }


    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
