<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerType extends Model
{
    //
    public $guarded = ['id'];

    protected $table = 'partner_types';

    public function partners() {
        return $this->hasMany('App\Partner2');
    }

    public function getDisplayNameAttribute() {
        return __('partner_type.'.$this->typename_en);
    }
}
