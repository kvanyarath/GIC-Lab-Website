<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public $table = 'photos';

    protected $guarded = ['id'];
}
