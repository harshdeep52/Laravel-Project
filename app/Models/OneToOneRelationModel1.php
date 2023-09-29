<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OneToOneRelationModel1 extends Model
{
    use HasFactory;
    public $table = "employees";

    function companyData(){
       return $this->hasOne("App\Models\Company");
    }

}
