<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable=['task','message','document','student_id'];


    public function Student(){
        return $this->belongsTo(Student::class);
     }
}
