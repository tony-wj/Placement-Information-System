<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Nicolaslopezj\Searchable\SearchableTrait;



class Post extends Model
{
    //
    protected $fillable = ['name','job_type','startTime','endTime','description','location','vacancy','salary'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function jobtype()
    {
        return $this->belongsTo('App\JobType');
    }
    public function applications()
    {
        return $this->hasMany('App\Application');
    }
    public function wishlists()
    {
        return $this->hasMany('App\Wishlist');
    }
}
