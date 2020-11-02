@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div class="text-center">
    <h2>Courses</h2>
    <hr>
</div>


<div class="container mb-3">

    @if($course->count())

    <div class="card-deck">

        @foreach($course as $c)
        <div class="card mb-3">

            <img src="{{ Storage::url($c->image) }}" class="card-img-top">

            <div class="card-body">

                <h5 class="card-title">{{ Str::limit($c->name, 50, '') }}</h5>

                <p class="card-text">{{ Str::limit($c->description, 150, '...') }}</p>

                @auth

                <a href="{{ route('courses.show', $c->slug) }}">Detail</a>

                @endauth

            </div>

        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">

        <div>

            {{ $course->links() }}

        </div>

    </div>

    @else

    <div class="alert alert-info text-center">

        There are no posts.

    </div>

    @endif

</div>



@endsection
