<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamDetail extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function class(){
        return $this->belongsTo(CourseClass::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class,'class_id','class_id');
    }
    
    // public function results()
    // {
    //     return $this->hasMany('App\Models\Result');
    // }
}
