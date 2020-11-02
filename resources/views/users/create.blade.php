@extends('layouts.master')

@section('title', 'Create Users')

@section('content')

<h1 class="text-center">Create new Users</h1>
<hr>

<div class="row ml-6">

    <div class="col-md-4">

        <form action="{{ route('') }}" method="post" class="ml-4" enctype="multipart/form-data">
            @csrf

            @include('users.partials.form', [

            'user' => new App\User,
            'submit' => 'Create'

            ])

        </form>

    </div>

</div>

@endsection
