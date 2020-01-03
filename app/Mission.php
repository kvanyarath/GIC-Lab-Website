<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Mission extends Model
{
    use Translatable;
    protected $translatable = ['mission_place', 'description'];
    public $table = 'missions';
}
