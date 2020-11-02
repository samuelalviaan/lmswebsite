<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_User extends Model
{
    
    protected $table = 'courses_user';

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function course()
    {
        return $this->hasOne('App\Course');
    }
}
