<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OneToOneRelationModel2 extends Model
{
    use HasFactory;
    public $table = "company";
}
