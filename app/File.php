<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  protected $fillable = ['id','user_id', 'owner_id', 'file_model', 'file_type', 'price', 'advance_paid', 'rent',
    'location', 'space', 'parking', 'lift', 'stage', 'manufacture_date',
   'delivery_date', 'address', 'convertible',
    'img1', 'img2', 'img3', 'img4', 'status' ];
}
