<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_Expense extends Model
{
    protected $fillable = ['user_id', 'project_id', 'date', 'item', 'cost', 'status' ];
}
