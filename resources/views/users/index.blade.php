@extends('layouts.master')

@section('title', 'Contents')

@section('content')

@foreach($user as $u)
<table class="table mt-3">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{ $u->id }}</th>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->password }}</td>
            <td>{{ $u->level</td>
            <td>{{ $u->Photo }}</td>
            <td>
                <a href="{{ route('users.edit', $u) }}" class="btn btn-primary mb-1">Edit</a>
                <form action="{{ route('users.delete', $u) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </td>
        </tr>
    </tbody>
</table>

@endforeach

@endsection
