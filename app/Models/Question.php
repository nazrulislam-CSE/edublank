<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function exam()
    {
        return $this->belongsTo(ExamDetail::class, 'class_id', 'id');
    }

    public function class(){
        return $this->belongsTo(CourseClass::class);
    }
}
