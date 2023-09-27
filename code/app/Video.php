<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable=['Video_Name','Video_description','coach_id','Course_id','video'];

    public function Coach(){
        return $this->belongsTo(Trainer::class);
  }


  public function Course(){
    return $this->belongsTo(Course::class,'Course_id');
 }
}
 

