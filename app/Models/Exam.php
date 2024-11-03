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
   

    public function userAnswers()
    {
        return $this->hasMany(UserAnswer::class);
    }

        public function completed_by_user($userId)
    {
        return UserAnswer::where('user_id', $userId)
                        ->where('exam_id', $this->id)
                        ->exists();
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

}
