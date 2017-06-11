<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationStatus extends Model
{
    //
    public function applications()
    {
        return $this->hasMany('App\Application');
    }
}
