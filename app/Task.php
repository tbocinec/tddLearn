<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Task extends Model
{

    protected $fillable = ['name','description','programingLanguage_id','categoryTask_id','active'];

    public  function programingLanguage(){
        return $this->belongsTo('App\ProgramingLanguage','programingLanguage_id');
    }

    public  function category(){
        return $this->belongsTo('App\CategoryTask','categoryTask_id');
    }

    public function level()
    {
        return $this->hasMany('App\TaskLevel');
    }
}
