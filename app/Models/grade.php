<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $guarded=[];


    public function courses(){
        return $this->belongsToMany(course::class, 'grade_course');
    }

    public function employs(){
        return $this->belongsToMany(employ::class, 'employ_grade');
    }

    public function studentattendance(){
        return $this->belongsToMany(Studentattendance::class, 'grade_studentattendances');
    }

    
}
