<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable= ['id_student','name','lastname','age','phone','address','birthdate'];
    protected $primaryKey = 'id_student';
    public $timestamps = false;
}
