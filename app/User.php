<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'email', 'password','firstName','lastName','gender','mobile','user_type',];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function personalInfos()
    {
        return $this->hasMany('App\PersonalInfo');
    }
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function userType()
    {
        return $this->belongsTo('App\UserType');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
     public function applications()
    {
        return $this->hasMany('App\Application');
    }
    public function wishlists()
    {
        return $this->hasMany('App\Wishlist');
    }
    public function notifications()
    {
        return $this->hasMany('App\Notification');
    }


}
