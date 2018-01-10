@extends('layouts.app')

@section('title', 'View Post')

@section('content')

<div class="container">

    <h1>{{ $post->title }}</h1>
    <hr>
    <p class="lead">

	<pre>

   {!! $post->body !!}

    </pre></p>
    <hr>

    <a href="/posts/{{ $post->id }}/edit" class="btn btn-info" role="button">Edit</a>


</div>

@endsection