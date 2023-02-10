<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentattendance extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $guarded=[];

    public function grade(){
        return $this->belongsToMany(Grade::class, 'grade_studentattendances');
    }

}
