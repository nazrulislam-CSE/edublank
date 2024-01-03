<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTest extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function get_class(){
        return $this->belongsTo(CourseClass::class, 'course_class_id');
    } 
}
