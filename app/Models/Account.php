<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable=[
  'name',
  'address',
  'types',
  'mobile',
  'email',
  'duration',
  'amount'
  ];  
}
