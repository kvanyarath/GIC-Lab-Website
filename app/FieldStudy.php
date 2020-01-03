<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FieldStudy extends Model
{
    //
    public function getTitleAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->title_kh;
        }
        return $this->title_en;
    }
    public function degree() {
        return $this->belongsTo('App\Degree');
    }
    public function programYears() {
        return $this->belongsToMany('App\ProgramYear', 'curriculums');
    }

    public function getTextDetailAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->text_detail_kh;
        }
        return $this->text_detail_en;
    }

    public function getCurriculumAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->curriculum_kh;
        }
        return $this->curriculum_en;
    }

    public function getEntranceSelectionAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->entrance_selection_kh;
        }
        return $this->entrance_selection_en;
    }
}
