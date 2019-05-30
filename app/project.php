<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    //
    protected $table='newproject';
    protected $fillable=['title','body','user_id','last_user_id'];

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
