<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentMessage extends Model
{
    public $table = 'student_message';

    public function getContentAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->content_kh;
        }
        return $this->content_en;
    }
}
