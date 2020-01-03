<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function getTitleAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->title_kh;
        }
        return $this->title_en;
    }
    
    public function getImageAttribute() {
        if ($this->thumbnail) {
            return \Storage::url(preg_replace('/(\.[^.]+)$/', sprintf('%s$1', '-cropped'), $this->thumbnail));
        }
        $tmp = '';
        if(\App::getLocale() == 'km') {
            $tmp = $this->detail_kh;
        } else {
            $tmp = $this->detail_en;
        }
        $doc = new \DOMDocument();
        @$doc->loadHTML($tmp);
        $tags = $doc->getElementsByTagName('img');
        if ($tags && $tags[0]) {
            return $tags[0]->getAttribute('src');
        }
        return '/img/project-default.jpg';
    }

    public function getDetailAttribute() {
        if(\App::getLocale() == 'km') {
            return $this->detail_kh;
        }
        return $this->detail_en;
    }
}
