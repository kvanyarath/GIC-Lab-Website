<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramYear extends Model
{
    //
    public function getProgramYearAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->program_year_kh;
        }
        return $this->program_year_en;
    }
}
