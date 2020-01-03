<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Event extends Model
{
    use Translatable;
    protected $translatable = ['name', 'detail'];
    protected $dates = [
        'created_at', 'updated_at', 'start_date', 'end_date'
    ];
}
