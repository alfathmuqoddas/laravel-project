@extends('layouts.app')

@section('content')
	<h1>Create Blog Post</h1>
	{!! Form::open(['action'=>'App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype'=> 'multipart/form-data']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
    		{{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'TItle'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('body', 'Body')}}
    		{{Form::textarea('body', '', ['id'=>'ckeditor', 'class'=>'form-control', 'placeholder'=>'Create Post Here'])}}
    	</div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection