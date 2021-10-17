@extends('layout')
@section('title', 'View')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Id</th>
            <td>{{$post->id}}</td>
        </tr>
        <tr>
            <th scope="row">Title</th>
            <td>{{$post->title}}</td>
        </tr>
        <tr>
            <th scope="row">Content</th>
            <td>{{$post->body}}</td>
        </tr>
    </tbody>
</table>
<td>
    <form method="POST" action="{{route('posts.destroy', ['post'=> $post->id])}}">
        @method('DELETE')
        @csrf
        <a class="btn btn-outline-warning" href="{{route('posts.edit', ['post'=>$post->id])}}">edit</a>
        <input class="btn btn-outline-danger" type="submit" value="delete">
        <a class="btn btn-outline-primary" href="{{url()->previous()}}">back</a>
    </form>
</td>
@endsection