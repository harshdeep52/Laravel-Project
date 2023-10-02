<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamp = false;
    
    // use for single db connection 
    public $table = "devices";
    
    // use for multiple db connection
//     public $table = "branch_master";
//     public $connection = "mysql2";
}
