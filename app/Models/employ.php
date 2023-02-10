<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employ extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $guarded=[];

    public function course(){
        return $this->belongsToMany(Course::class, 'employ_course');
    }

    public function grades(){
        return $this->belongsToMany(grade::class, 'employ_grade');
    }

    
}
