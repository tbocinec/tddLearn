<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskLevel extends Model
{

  protected  $fillable = ['id','name','description','task_id'];

    public function test()
    {
        return $this->hasMany('App\TaskTest','level_id');
    }
}
