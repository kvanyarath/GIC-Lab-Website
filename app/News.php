<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    public $dates = ['created_at', 'updated_at', 'posted_date'];

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

    public function getShortDescriptionAttribute() {
        $tmp = '';
        if(\App::getLocale() == 'km') {
            if ($this->subtitle_kh) {
                $tmp = $this->subtitle_kh;
            } else {
                $tmp = strip_tags($this->description_kh);
            }
        } else {
            if ($this->subtitle_en) {
                $tmp = $this->subtitle_en;
            } else {
                $tmp = strip_tags($this->description_en);
            }
        }
        if (strlen($tmp) > 200) {
            $tmp = substr($tmp, 0, 200) . '...';
        } 
        return $tmp;
    }

    public function getImageAttribute() {
        if ($this->thumbnail) {
            return \Storage::url(preg_replace('/(\.[^.]+)$/', sprintf('%s$1', '-cropped'), $this->thumbnail));
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
        return '/img/default_news_image.png';
    }

    public function setPostedDateAttribute($value) {
        if (!$value) {
            $this->attributes['posted_date'] = \Carbon\Carbon::now();
        }
    }
}
