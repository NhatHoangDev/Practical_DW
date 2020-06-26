<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $table = "school";
    public $fillable = [
        "studentname",
        "studentemail",
        "studenttelephone",
        "feedback"
    ];
}
