<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    public $fillable=
        [
            'from','to','status','user_id','department_id','leave_id','reason','period',
        ];

    public function User(){
        return $this->belongsTo('App\User');
    }
    public function Deparment()
    {
        return $this->belongTo('App\Department');
    }
    public  function Leave()
    {
        return $this->belongsTo('App\Leave');

    }
}
