<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoAlbum extends Model
{
    //
    public $table = 'photo_albums';

    public function getDisplayNameAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->name_kh;
        }
        return $this->name_en;
    }
    
    public function getDisplayTextAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->text_desc_en;
        }
        return $this->text_desc_kh;
    }

    public function photos() {
        return $this->hasMany('App\Photo');
    } 
}
