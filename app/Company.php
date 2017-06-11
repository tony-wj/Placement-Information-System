<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function companyField()
    {
    	return $this->belongsTo('App\CompanyField');
    }
    public function users()
    {
    	return $this->hasMany('App\User');
    }
}
