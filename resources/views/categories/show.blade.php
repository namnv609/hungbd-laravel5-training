@extends('layouts.main')
@section('content')
	<ol class="breadcrumb">
		<li>{!! link_to_action('CategoriesController@index', 'Categories') !!}</li>
	  	<li class="active">{{$category->title}}</li>
	</ol>
	<h3>
		{{ $category->title }}
		<span style="font-size: 15px; margin-left: 15px;">({!! link_to_action('CategoriesController@edit', 'Edit', $category->id) !!})</span>
	</h3>
	<div class="pdbt10 borderBottom">
		Created at: <strong>{{ $category->created_at }}</strong>
	</div>
	<div class="pdt10">
		{{ $category->description }}
	</div>
@endsection

