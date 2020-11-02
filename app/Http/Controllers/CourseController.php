<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Support\Str;
use App\Course;
use App\Http\Requests\CourseRequest;


class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        $course = Course::all();
        return view('courses.index', ['course' => $course]);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(CourseRequest $course)
    {

        $crs = $course->all();
        $crs['slug'] = Str::slug(\request('name')) . '-' . Str::random(4);
        $crs['image'] = $course->file('image')->store('assets/images', 'public');

        Course::create($crs);

        return \redirect()->route('courses.index')->with('success', 'Course added!');
    }

    public function show($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $content = Content::get();
        return view('courses.show', compact('course', 'content'));
    }


    public function edit(Course $course)
    {
        return \view('courses.edit', \compact('course'));
    }

    public function update(Course $course)
    {

        $crs = request()->validate([
            'name' => 'required',
            'status' => 'required',
            'description' => 'required',
            // 'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'user_id' => 'required'
        ]);

        $crs['slug'] = Str::slug(request('name')) . '-' . Str::random(4);



        $course->update($crs);

        return redirect()->route('courses.index')->with('success', 'Courses updated!');
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('courses.index');
    }

    public function search(CourseRequest $request)
    {
        // menangkap data pencarian
        $name = $request->name;

        // mengambil data dari table pegawai sesuai pencarian data
        // $pegawai = DB::table('pegawai')
        //     ->where('pegawai_nama', 'like', "%" . $cari . "%")
        //     ->paginate();

        $courses = Course::where('name','like',"%".$name."%")->paginate(2);

        // mengirim data pegawai ke view index
        return view('courses.index', \compact('courses'));
    }
}
