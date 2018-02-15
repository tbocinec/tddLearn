<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $folder = '/images/';
    protected $fillable = ['file'];

    public function getFileAttribute($photo){
        return $this->folder . $photo;
    }
}
