<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScorePersonal extends Model
{
    //
    protected $table = 'scores_personal';
    protected $fillable = [
        'user_id','i1','i2'
    ];
    public function User(){
        return $this->belongsTo('App/User','user_id');
    }

}
