@extends('layouts.master')

@section('title', 'Update Contents')

@section('content')

<h1 class="text-center">Update Content</h1>
<hr>

<div class="row ml-6">

    <div class="col-md-4">

        <form action="{{ route('contents.edit', $content) }}" method="post" class="ml-5">

            @include('contents.partials.form', [

            'submit' => 'Update'

            ])

        </form>

    </div>

</div>

@endsection
