@extends('layouts.master')

@section('title', 'Create Contents')

@section('content')

<h1 class="text-center">Create new Contents</h1>
<hr>

<div class="container mb-3">

    <div class="row ml-6">

        <div class="col-md-4">

            <form action="/content/store" method="post" class="ml-4">
                @csrf

                @include('contents.partials.form', [

                'content' => new App\Content,
                'submit' => 'Create'

                ])

            </form>

        </div>

    </div>

</div>

@endsection
