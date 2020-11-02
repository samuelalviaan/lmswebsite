<?php

namespace App\Http\Controllers;

use App\Content;
use App\Course;
use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Show the application dashboard.
     *
     */
    public function index()
    {
        $course = Course::latest()->simplePaginate(3);
        return view('home', compact('course'));
    }

}
