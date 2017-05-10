@extends('layouts.admin')
@section('content')

    {{--@if(Session::has('post_deleted'))--}}
        {{--<p class="bg-danger">{{session('post_deleted')}}</p>--}}

    {{--@endif--}}
    <h1>All POSTS</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Owner</th>
            <th>Photo</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
                    <td><img src="{{URL::asset($post->photo ? $post->photo->file : 'no photo')}}" alt=""></td>
                    <td>{{$post->category ? $post->category->name : 'uncategorised'}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForhumans()}}</td>
                    <td>{{$post->updated_at->diffForhumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop