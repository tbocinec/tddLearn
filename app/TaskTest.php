<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskTest extends Model
{
    protected  $fillable = ['name','code','type','level_id'];
}
