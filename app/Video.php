<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    public function setPostedDateAttribute($value) {
        if (!$value) {
            $this->attributes['posted_date'] = \Carbon\Carbon::now();
        }
    }

    public function getTitleAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->title_kh;
        }
        return $this->title_en;
    }

    public function getDescriptionAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->description_kh;
        } 
        return $this->description_en;
    }

    public function getYoutubeIdAttribute() {
        if ($this->video_file) {
            parse_str( parse_url( $this->video_file, PHP_URL_QUERY ), $my_array_of_vars );
            return isset($my_array_of_vars['v']) ? $my_array_of_vars['v'] : '';    
        }
        return null;
    }
}
