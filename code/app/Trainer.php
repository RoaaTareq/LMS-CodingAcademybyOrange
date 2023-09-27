<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Trainer extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard='trainer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =['name_Trainer','email_Trainer','phone_Trainer','eduction_Trainer','Birthday_Trainer','password','image'];

    public function Course(){
       return $this->hasMany(Course::class,'trainer_id');
    }
 
 
    
    public function Courses(){
       return $this->hasMany(Course::class,'email_id');
    }
 
    public function library(){
       return $this->hasMany(library::class,'tutor_id');
    }
 
 
    public function Videos(){
       return $this->hasMany(Video::class,'coach_id');
    }
 


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
