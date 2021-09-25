@extends('layouts.app')

@section('content')
	<h1>Post</h1>
	@if (count($posts) > 0)
		@foreach ($posts as $post)
			<div class="card my-2">
				<div class="card-body">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<img src="/storage/cover_images/{{$post->cover_image}}" alt="post-image" style="width:100%;margin-bottom:1rem;">
						</div>
						<div class="col-md-4 col-sm-4">
							<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
							<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	@else
		<p>No Posts Found</p>
		{{-- expr --}}
	@endif
@endsection