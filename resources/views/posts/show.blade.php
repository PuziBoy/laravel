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
@endsection