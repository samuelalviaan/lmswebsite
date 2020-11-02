@extends('layouts.main')

@section('title', $course->name)

@section('content')

<div>
    <h2 class="text-center mt-2">{{ $course->name }}</h2>
    <hr>
</div>

<div class="text-center mb-3">
    <img src="{{ Storage::url($course->image) }}" class="rounded" alt="..." style="width: 400px;">
</div>

<div class="container-sm">
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Pengertian
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    {{ $course->description }}
                </div>
            </div>
        </div>
    </div>

</div>

@foreach($content as $cont)

<div class="text-center mb-3 mt-3">

    <h3>{{ $cont->type }}</h3>

</div>

<div class="text-center mb-3">

    <img src="{{ Storage::url($course->image) }}" alt="" style="width: 400px;">

</div>

<div class="container-sm text-center mb-3">

    {{ $cont->body }}

</div>

@endforeach

@endsection
