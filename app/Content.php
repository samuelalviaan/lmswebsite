<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
protected $fillable = ['name', 'type', 'status', 'body', 'course_id'];

    public function course()
    {
        return $this->hasOne('App\Course');
    }
}