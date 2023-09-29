<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessorExampleModel extends Model
{
    use HasFactory;
    public $table ="members";
    
    function getNameAttribute($value){
           return ucfirst($value); 
    }

    function getCityAttribute($value){
        return ucfirst($value).", India ";
    }
}
