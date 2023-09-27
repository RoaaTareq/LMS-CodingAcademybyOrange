<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
      protected $fillable=['course_Name','trainer_id','Course_deatials','Course_Image','email_id'];
public function Trainer(){
      return $this->belongsTo(Trainer::class);
}
  

public function Coach(){
      return $this->belongsTo(Trainer::class);
}

public function  videos(){
      return $this->hasMany(Video::class);
}
}
