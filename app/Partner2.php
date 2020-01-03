<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner2 extends Model
{
    //
    protected $table = 'partner2';
    public $guarded = ['id'];

    public function partnerType() {
        return $this->belongsTo('App\PartnerType');
    }
}
