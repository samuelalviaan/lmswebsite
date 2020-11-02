<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $content = Content::all();
    	return view('contents.index', ['content' => $content]);
    }

    public function create()
    {
        return \view('contents.create');
    }

    public function store(Request $request)
    {

        // $path = request->file('image')->store('images');

        $request->validate([
            'name'=>'required',
            'status'=>'required',
            'body'=>'required',
            'status'=>'required',
            'course_id'=>'required'

        ]);


        $content = new Content([
            'name' => $request->get('name'),
            'type' => $request->get('type'),
            'body' => $request->get('body'),
            'status' => $request->get('status'),
            'course_id' => $request->get('course_id')
        ]);

        $content->save();

        return redirect('/content');
    }

    public function edit(Content $content)
    {
        return \view('contents.edit', \compact('content'));
    }

    public function update(Content $content)
    {
        $cnt = request()->validate([

            'name'=>'required',
            'status'=>'required',
            'body'=>'required',
            'status'=>'required',
            'course_id'=>'required'

        ]);

        $content->update($cnt);

        return \redirect('/content');
    }

    public function destroy($id)
    {
        $content = Content::find($id);
        $content->delete();
        return redirect('/content');
    }
}
