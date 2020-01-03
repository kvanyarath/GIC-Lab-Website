<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    //
    public function getDegreeAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->degree_kh;
        }
        return $this->degree_en;
    }

    public function fieldStudies() {
        return $this->hasMany('App\FieldStudy');
    }
}
