<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class InvitedProfessor extends Model
{
    use Translatable;
    protected $translatable = ['name', 'short_bio_description', 'long_desc'];
    protected $table = 'invited_professors';
}
