<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function course()
    {
        $query = \request('query');

        $course = Course::where("name", "like", "%$query%")->latest()->simplePaginate(5);

        return \view('home', \compact('course'));
    }
}
