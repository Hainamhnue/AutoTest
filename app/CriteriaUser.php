<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CriteriaUser extends Model
{
    //
    protected $table = 'criteria';
    protected $fillable = [
        'name', 'i1','i2'
    ];

}
