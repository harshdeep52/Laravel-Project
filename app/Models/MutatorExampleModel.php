<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutatorExampleModel extends Model
{
    use HasFactory;
    public $table = "members";
    public $timestamps = false;

    function setNameAttribute($value){
        return $this->attributes['name'] =  "Mr. ".$value;
    }

    function setCityAttribute($value){
        return $this->attributes['city'] =  $value.", India";
    }

}
