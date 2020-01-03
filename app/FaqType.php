<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqType extends Model
{
    //
    public $guarded = ['id'];

    protected $table = 'faq_types';

    public function faqs() {
        return $this->hasMany('App\Faqs2');
    }

    public function getDisplayNameAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->typename_kh;
        } else {
            return 'Our '. $this->typename_en. ' Faqs';
        }
    }

    public function getLabelAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->typename_kh;
        } else {
            return $this->typename_en;
        }
    }
}
