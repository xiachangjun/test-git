<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wxuser extends Model
{
    protected $table='wxuser';
    //
    protected $fillable=['openid'];
}
