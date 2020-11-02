@extends('layouts.master')

@section('title', 'Update Course')

@section('content')

<h1 class="text-center">Update Course</h1>
<hr>



<div class="container">

    <div class="row">

        <div class="col-md-4 text-center">

            <form action="{{ route('courses.edit', $course) }}" method="post" class="ml-5">

                @include('courses.partials.form', [

                'submit' => 'Update'

                ])

            </form>

        </div>

    </div>

</div>



@endsection
