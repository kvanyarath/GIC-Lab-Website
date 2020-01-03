<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentsProject extends Model
{
    
     protected $fillable = [
    	'name',
    	'description',
    	'type',
    	'academic_year'
    ];
}
