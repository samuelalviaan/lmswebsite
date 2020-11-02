@extends('layouts.master')

@section('title', 'Contents')

@section('content')



<div class="table-responsive">

    @if($content->count())

    <table class="table mt-3">

        @foreach($content as $c)

        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Body</th>
                <th scope="col">Status</th>
                <th scope="col">Course ID</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $c->id }}</th>
                <td>{{ $c->name }}</td>
                <td>{{ $c->type }}</td>
                <td>{{ $c->body }}</td>
                <td>{{ $c->status }}</td>
                <td>{{ $c->course_id }}</td>
                <td>
                    <a href="{{ route('contents.edit', $c) }}" class="btn btn-primary mb-1 d-inline"><i class="fas fa-pen-square"></a>
                    <form action="{{ route('contents.delete', $c->id) }}" method="post" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></button>

                    </form>
                </td>
            </tr>
        </tbody>

        @endforeach


    </table>

    @else

    <div class="alert alert-info text-center mt-3">

        There are no contents.

    </div>

    @endif

</div>



@endsection
