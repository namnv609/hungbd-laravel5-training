@extends('layouts.main')
@section('content')
	<ol class="breadcrumb">
		<li>{!! link_to_action('CategoriesController@index', 'Categories') !!}</li>
		<li>{!! link_to_action('CategoriesController@show', 'View', $category->id) !!}</li>
	  	<li class="active">{{$category->title}}</li>
	</ol>
	<hr>
	@if ( $errors->any() )
		<ul class="mgbt20">
			@foreach ($errors->all() as $error)
				<li class="error">{{ $error }}</li>
			@endforeach
		</ul>	
	@endif
	{!! Form::model($category,[ 'method' => 'PATCH', 'action' => ['CategoriesController@update', $category->id] ]) !!}
		{!! Form::text('title', $category->title, array('required', 'class'=>'form-control', 'placeholder'=>'Post title')) !!}
		<div id="editor" class="pdt20">
			{!! Form::textarea('description', $category->description, array('required', 'rows'=>'15', 'class'=>' form-control', 'placeholder'=>'#### Category description')) !!}
		</div>
		<div class="pdt20">
			{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection