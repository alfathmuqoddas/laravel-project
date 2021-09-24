@extends('layouts.app')

@section('content')
	<h1>Post</h1>
	@if (count($posts) > 0)
		@foreach ($posts as $post)
			<div class="card my-2">
				<div class="card-body">
					<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
					<small>Written on {{$post->created_at}}</small>
				</div>
			</div>
		@endforeach
	@else
		<p>No Posts Found</p>
		{{-- expr --}}
	@endif
@endsection