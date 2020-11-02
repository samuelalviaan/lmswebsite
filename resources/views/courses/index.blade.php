@extends('layouts.master')

@section('title', 'Courses')

@section('content')


<!-- <div class="container-sm">
    <form action="{{ url('search') }}" method="GET">
        <input type="text" name="query" placeholder="Ketik disini...">
        <input type="submit" value="search">
    </form>
</div> -->


<div class="table-responsive">

    @if($course->count())

    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">User ID</th>
                <th scope="col" style="width: 15%;">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach($course as $c)

            <tr>
                <th scope="row">{{ $c->id }}</th>
                <td>{{ $c->name }}</td>
                <td><img src="{{ Storage::url($c->image) }}" style="width:150px"></td>
                <td>{{ $c->description }}</td>
                <td>{{ $c->status }}</td>
                <td>{{ $c->user_id }}</td>
                <td>
                    <a href="{{ route('courses.edit', $c) }}" class="btn btn-primary mb-1 d-inline"><i class="fas fa-pen-square"></i></a>
                    <form action="{{ route('courses.destroy', $c->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger mb-1"><i class="fas fa-trash"></i></button>

                    </form>
                    <a href="{{ route('courses.show', $c->slug) }}" class="btn btn-success d-inline"><i class="fas fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@else

<div class="alert alert-info text-center">

    There is no contents.

</div>

@endif



@endsection
