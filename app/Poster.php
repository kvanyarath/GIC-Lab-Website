<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    //
    public function getPosterAttribute() {
        if ($this->file_location) {
            return \Storage::url($this->file_location);
        }
        return null;
    }

    public function getThumbnailAttribute() {
        if ($this->file_location) {
            return \Storage::url(preg_replace('/(\.[^.]+)$/', sprintf('%s$1', '-cropped'), $this->file_location));
        }
        return null;
    }
}
