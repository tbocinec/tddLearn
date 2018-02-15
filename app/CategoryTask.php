<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryTask extends Model
{
    protected $fillable = [
        'id', 'name', 'description','active',
    ];

}
