<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScorePersonalFaculty extends Model
{
    //
    protected $table = 'scores_personal_faculty';
    protected $fillable = [
        'i1','i2','user_id','faculty_id'
    ];
    public function User(){
        return $this->belongsTo('App/User','user_id');
    }
    public function InforFaculty(){
        return $this->belongsTo('App/InforFaculty','faculty_id');
    }
}
