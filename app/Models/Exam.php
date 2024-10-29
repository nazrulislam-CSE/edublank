<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function class(){
        return $this->belongsTo(CourseClass::class);
    }
    public function batch(){
        return $this->belongsTo(Batch::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    
    // public function results()
    // {
    //     return $this->hasMany('App\Models\Result');
    // }


    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];
}
