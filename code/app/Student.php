<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student  extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard='student';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable=['student_name','student_email','phone_student','eduction_student','Birthday','password','student_image'];


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


    public function Tasks(){
        return $this->hasMany(Task::class);
     }



     public function posts(){
        return $this->hasMany(Post::class);
     }

     public function comments(){
        return $this->hasMany(Comment::class);
     }
     public function Profile(){
        return $this->hasone(Profile::class);
     }
}
