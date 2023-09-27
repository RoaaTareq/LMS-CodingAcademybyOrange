<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable= ['body','student_id'];




    public function Comments(){
        return $this->hasmany(Comment::class);
    }

    public function Student(){
        return $this->belongsTo(Student::class);
    }
}
