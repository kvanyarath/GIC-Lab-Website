<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class SiteContent extends Model
{
    //
    use Translatable;
    protected $translatable = ['html_text'];
}
