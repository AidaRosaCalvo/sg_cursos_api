<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    use HasFactory;
    protected $fillable = ['code_id','course_id','employee_id','place','session_period','date'];

    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function professor(){
        return $this->belongsTo(Employee::class);
    }
    public function employees(){
        return $this->belongsToMany(Employee::class,'employee__editions');
    }
}
