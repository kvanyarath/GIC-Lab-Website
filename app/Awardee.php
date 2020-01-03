<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Awardee extends Model
{
    use Translatable;
    protected $translatable = ['full_name', 'text_description'];
    protected $table = 'awardee';
}
