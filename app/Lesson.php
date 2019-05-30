<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //隐藏字段
    //protected $hidden=['title'];


    protected  $fillable=['title','body'];


}

