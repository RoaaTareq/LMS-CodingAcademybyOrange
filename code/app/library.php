<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    protected $fillable=['bookName','filebook','description','image','tutor_id'];
    //

    public function Tutor(){
      return $this->belongsTo(Trainer::class);
  }
}
