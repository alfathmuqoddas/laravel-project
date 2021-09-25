@extends('layouts.app')

@section('content')
	<h1>Edit Blog Post</h1>
	{!! Form::open(['action'=>['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST','enctype'=> 'multipart/form-data']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
    		{{Form::text('title',$post->title, ['class'=>'form-control', 'placeholder'=>'TItle'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('body', 'Body')}}
    		{{Form::textarea('body', $post->body, ['id'=>'ckeditor', 'class'=>'form-control', 'placeholder'=>'Create Post Here'])}}
    	</div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection