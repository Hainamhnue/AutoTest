<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreFaculty extends Model
{
    //
    protected $table = 'scores_faculty';
    protected $fillable = [
        'faculty_id','i1','i2'
    ];

    public function InforFaculty(){
        return $this->belongsTo('App/InforFaculty');
    }

}
