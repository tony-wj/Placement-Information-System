<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $fillable = ['user_id','post_id','info_id','status_id'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function application_info()
    {
        return $this->belongsTo('App\ApplicationInfo');
    }
    public function application_status()
    {
        return $this->belongsTo('App\ApplicationStatus');
    }
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
