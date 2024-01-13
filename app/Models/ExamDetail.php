<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamDetail extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }
    public function results()
    {
        return $this->hasMany('App\Models\Result');
    }
}
