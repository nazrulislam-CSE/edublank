<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseClass extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function get_course(){
        return $this->belongsTo(Course::class, 'course_id');
    } 
}
