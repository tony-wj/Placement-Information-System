<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoType extends Model
{
    //
     public function personalInfos()
    {
    	return $this->hasMany('App\PersonalInfos');
    }
}
