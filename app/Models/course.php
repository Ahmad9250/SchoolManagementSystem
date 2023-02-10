<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\VarDumper\Caster\ClassStub;

class course extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $guarded=[];


    public function employ(){
        return $this->belongsToMany(Employ::class, 'employ_course');
    }

  

    public function grades(){
        return $this->belongsToMany(grade::class, 'grade_course');
    }
}
