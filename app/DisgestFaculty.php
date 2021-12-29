<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisgestFaculty extends Model
{
    //
    protected $table = 'disgest_faculty';
    protected $fillable = [
        'sum','disgest','faculty_id'
    ];
    public function InforFaculty(){
        return $this->belongsTo('App/InforFaculty','faculty_id');
    }
}
