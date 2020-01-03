<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotionYear extends Model
{
    //
    public function getLabelAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->label_kh;
        }
        return $this->label_en;
    }
}
