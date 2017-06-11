<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyField extends Model
{
    //
    public function companies()
    {
    	return $this->hasMany('App\Company');
    }
}
