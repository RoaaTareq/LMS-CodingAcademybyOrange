<?php

namespace App\Policies;

use App\User;
use App\Student;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilePolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any = students.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the = student.
     *
     * @param  \App\User  $user
     * @param  \App\=Student  $=Student
     * @return mixed
     */
    public function view(User $user, Student $Student)
    {
        //
    }

    /**
     * Determine whether the user can create = students.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the = student.
     *
     * @param  \App\User  $user
     * @param  \App\=Student  $=Student
     * @return mixed
     */
    public function update(User $user, Student $Student)
    {
        //
    }

    /**
     * Determine whether the user can delete the = student.
     *
     * @param  \App\User  $user
     * @param  \App\=Student  $=Student
     * @return mixed
     */
    public function delete(User $user, Student $Student)
    {
        //
    }

    /**
     * Determine whether the user can restore the = student.
     *
     * @param  \App\User  $user
     * @param  \App\=Student  $=Student
     * @return mixed
     */
    public function restore(User $user, Student $Student)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the = student.
     *
     * @param  \App\User  $user
     * @param  \App\=Student  $=Student
     * @return mixed
     */
    public function forceDelete(User $user, Student $Student)
    {
        //
    }
}
