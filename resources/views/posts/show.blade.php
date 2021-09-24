@extends('layouts.app')

@section('content')
	<h1>{{$post->title}}</h1>
	<small>Written on {{$post->created_at}}</small>
	<div class="mt-3">
		{!!$post->body!!}
	</div>
	<hr>
	<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

	{!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=>'POST'])!!}
		{{Form::hidden('_method', 'DELETE')}}
		{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
	{!!Form::close()!!}
@endsection