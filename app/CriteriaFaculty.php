<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CriteriaFaculty extends Model
{
    //
    protected $table = 'criteria_faculty';
    protected $fillable = [
        'name', 'i1','i2'
    ];

}
