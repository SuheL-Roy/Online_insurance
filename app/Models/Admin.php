<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable=[
                'name',
                'address',
                'types',
                'mobile',
                'email',
                'duration',
                'amount' ];
}
