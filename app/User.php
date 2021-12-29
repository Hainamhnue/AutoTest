<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password','img','phone','bomon','introduction','isadmin','isdonvi','isuser','faculty_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function ScorePersonal(){
        return $this->hasMany('App/ScorePersonal');
    }
    public function DisgestUser(){
        return $this->hasMany('App/DisgestUse');
    }
    public function ScorePersonalFaculty(){
        return $this->hasMany('App/ScorePersonalFaculty');
    }
    public function InforFaculty(){
        return $this->belongsTo('App/InforFaculty');
    }
}
