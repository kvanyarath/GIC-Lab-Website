<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqParentType extends Model
{
    //
    public function getLabelAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->label_kh;
        } else {
            return $this->label_en;
        }
    }

    public function faqTypes() {
        return $this->hasMany('App\FaqType');
    }
}
