<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['comment','post_id','student_id'];




 public function post(){
     return $this->belongTo(Post::class);
 }


 public function student()
 {
     return $this->belongsTo(Student::class);
 }
}