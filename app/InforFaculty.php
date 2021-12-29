<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InforFaculty extends Model
{
    //
    protected $table = 'infor_faculty';
    protected $fillable = [
        'name','email','img','introduction'
    ];
    public $timestamp = false;
    public function User(){
        return $this->hasMany('App/User');
    }
    public function ScoreFaculty(){
        return $this->hasMany('App/ScoreFaculty','faculty_id');
    }
    public function ScorePersonalFaculty(){
        return $this->hasMany('App/ScorePersonalFaculty');
    }
    public function DisgestFaculty(){
        return $this->hasMany('App/DisgestFaculty','faculty_id');
    }
}
