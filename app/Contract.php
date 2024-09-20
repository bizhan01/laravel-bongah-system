<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
      'user_id','date', 'customer_id', 'file_id',
       'contract_type', 'price', 'advance_paid',
        'rent', 'contract_code', 'startDate','endDate', 'commission',
         'contract_scan', 'status' ];
}
