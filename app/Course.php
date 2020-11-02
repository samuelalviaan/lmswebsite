<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'status', 'slug', 'image', 'description', 'user_id'];

    // protected $guarded;

    public function RouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function course_user()
    {
        return $this->belongsTo(Course_User::class);
    }

    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
