<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GicProject extends Model
{
    //
    public function getTitleAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->title_kh;
        }
        return $this->title_en;
    }

    public function getShortDescriptionAttribute() {
        $tmp = '';
        if(\App::getLocale() == 'km') {
            // $tmp = strip_tags($this->description_kh);
            $tmp = $this->short_desc_kh;
        } else {
            // $tmp = strip_tags($this->description_en);
            $tmp = $this->short_desc_en;
        }
        if (strlen($tmp) > 500) {
            $tmp = substr($tmp, 0, 500) . '...';
        } 
        return $tmp;
    }
    
    public function getDescriptionAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->description_kh;
        }
        return $this->description_en;
    }

    public function getImageAttribute() {
        if ($this->thumbnail) {
            // return \Storage::url(preg_replace('/(\.[^.]+)$/', sprintf('%s$1', '-cropped'), $this->thumbnail));
            return \Storage::url($this->thumbnail);
        }
        $tmp = '';
        if(\App::getLocale() == 'km') {
            $tmp = $this->description_kh;
        } else {
            $tmp = $this->description_en;
        }
        $doc = new \DOMDocument();
        @$doc->loadHTML($tmp);
        $tags = $doc->getElementsByTagName('img');
        if ($tags && $tags[0]) {
            return $tags[0]->getAttribute('src');
        }
        return '/img/project-default.jpg';
    }
}
