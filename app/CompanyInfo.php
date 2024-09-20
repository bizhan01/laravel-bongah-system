<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $fillable = ['company_name', 'company_cell_phone', 'company_phone', 'company_email', 'company_website', 'company_address', 'logo', 'status' ];
}
