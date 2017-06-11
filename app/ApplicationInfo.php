<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationInfo extends Model
{
    //
     protected $fillable = ['resume','cover_letter'];
    public function applications()
    {
        return $this->hasMany('App\Application');
    }
}
