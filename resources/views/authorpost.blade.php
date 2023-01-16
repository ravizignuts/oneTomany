@extends('layout.master')
@section('content')
<h1 align="center">Posts</h1>
<table border="2" class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Author ID</th>
        </tr>
    </thead>
    @foreach ($posts as $posts )
    <tbody>
        <tr>
            <td>{{ $posts->id }}</td>
            <td>{{ $posts->title }}</td>
            <td>{{ $posts->cat }}</td>
            <td>{{ $posts->author_id }}</td>
            {{--<td><a href="#" class="p-2 bg-primary text-white">POST</a></td>  --}}
            {{-- <td><a href="delete/{{ $data->id }}" class="p-2 bg-danger text-white">DELETE</a></td> --}}
        </tr>
    </tbody>
    @endforeach
@endsection
