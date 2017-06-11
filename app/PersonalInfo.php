<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    //
    protected $fillable = ['name','description','type_id'];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function infoType()
    {
    	return $this->belongsTo('App\InfoType');
    }
}
