<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = ['id','user_id','task_id'];


    public function task(){
        return $this->belongsTo('App\Task');
    }
}
