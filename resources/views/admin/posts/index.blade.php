@extends('layouts.admin')
@section('content')
    <h1>Posts</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Body</th>
            <th>User</th>
            <th>Category</th>
            <th>Photo</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)

            <tr>
                <td>{{$post->id}}</td>
                <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</a></td>
                <td>{{$post->body}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category_id}}</td>

                <td><img height="40" src="{{isset($post->photo->path) ? $post->photo->path : 'http://placehold.it/50x50'}}" alt="User Photo"></td>

                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
        @endif

        </tbody>
    </table>


@stop