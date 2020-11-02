@extends('layouts.master')

@section('title', 'Create Courses')

@section('content')

<h1 class="text-center">Create new Courses</h1>
<hr>

<div class="container" style="flex: auto;">

    <div class="row">

        <div class="col-md-4 col-md-right">

            <form action="{{ route('courses.store') }}" method="post" class="ml-4" enctype="multipart/form-data">

                @include('courses.partials.form', [

                'course' => new App\Course,
                'submit' => 'Create'

                ])

            </form>

        </div>

    </div>

</div>

@endsection
