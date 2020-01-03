<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class StaffPosition extends Model
{
    use Translatable;
    protected $translatable = ['staff_position', 'group'];
    protected $table = 'staff_position';
}
