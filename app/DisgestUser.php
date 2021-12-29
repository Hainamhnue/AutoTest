<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisgestUser extends Model
{
    //
    protected $table = 'disgest_users';
    protected $fillable = [
        'sum','sum_f','avg','disgest','user_id'
    ];
    public function User(){
        return $this->belongsTo('App/User','user_id');
    }
}
