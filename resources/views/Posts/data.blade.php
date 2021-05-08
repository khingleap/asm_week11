@extends('layouts.app')

@section('content')
    <div>
    <table class="table table-dark table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Description</th>
        <th scope="col">Owner</th>
        <th scope="col"><a class="btn btn-primary" href="{{ route('Posts.create') }}">Add Post</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name}}</td>
            <td>{{ $post->description }}</td>
            <td>{{ $post->owner }}</td>
            <td>

              <a class="btn btn-primary" href="{{ route('Posts.edit', $post->id) }}">Edit</a>
              <a class="btn btn-danger" href="{{ route('Posts.destroy', $post->id) }}">Delete</a>

            </td>
          </tr>
        @endforeach
    </tbody>
    </table>
    </div>
@endsection

