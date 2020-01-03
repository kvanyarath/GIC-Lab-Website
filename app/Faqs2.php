<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faqs2 extends Model
{
    //
    protected $table = 'faqs2';
    public $guarded = ['id'];

    public function faqType() {
        return $this->belongsTo('App\FaqType');
    }

    public function getQuestionAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->question_kh;
        }
        return $this->question_en;
    }

    public function getAnswerAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->answer_kh;
        }
        return $this->answer_en;
    }
}
