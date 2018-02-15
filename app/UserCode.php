<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCode extends Model
{
    protected $fillable =  ['id','user_id','solution_id','code'];
}
