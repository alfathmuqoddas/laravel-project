@extends('layouts.app')

@section('content')
	<h1>{{$post->title}}</h1>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	<img src="/storage/cover_images/{{$post->cover_image}}" alt="post-image" style="width:100%;margin:1rem 0;">
	<div class="mt-3">
		{!!$post->body!!}
	</div>
	<hr>
	@if (!Auth::guest())
		@if (Auth::user()->id == $post->user_id)
			<a href="/posts/{{$post->id}}/edit" class="btn btn-light mb-2">Edit</a>
			{!!Form::open(['action'=>['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=>'POST'])!!}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
			{!!Form::close()!!}	
		@endif
	@endif	
@endsection