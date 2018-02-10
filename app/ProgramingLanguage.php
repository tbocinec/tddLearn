<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramingLanguage extends Model
{
    protected $fillable = [
        'id', 'name', 'compiler_url','active',
    ];
}
