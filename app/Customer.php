<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['user_id', 'customer_type', 'prefix', 'name', 'father_name', 'national_code', 'phone', 'address', 'status' ];
}
