<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['user_id', 'date', 'customer_id', 'project_type', 'location', 'space',  'start_date', 'end_date', 'status' ];
}
