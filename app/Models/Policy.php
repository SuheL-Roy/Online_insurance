<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $fillable = [
        'user_id',
        'policy_holder_name',
        'holder_image',
        'father_name',
        'mother_name',
        'occupation',
        'date_of_birth',
        'gender',
        'nid_number',
        'nationality',
        'religion',
        'maritial_status',
        'permanent_address',
        'present_address',
        'annual_income',
        'mobile',
        'email',
        'benificant_name',
        'banificient_nid',
        'relation',
        'benifient_address',
      
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
