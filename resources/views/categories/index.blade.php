@extends('layouts.main')
@section('content')
	<div class="textAlignRight pdbt10">
		{!! link_to_action('CategoriesController@create', 'Create Category', '',array('class'=>'btn btn-primary')) !!}
	</div>
	@if(isset($categories))
		@foreach ($categories as $key => $category)
			<div class="one-post">
				<h3 class="borderBottom pdbt10">
					{!! link_to_action('CategoriesController@show', $category->title, $category->id) !!}
					<span style="font-size: 15px; margin-left: 15px;">({!! link_to_action('CategoriesController@edit', 'Edit', $category->id) !!})</span>
				</h3>
				<div class="alignJustify pdt10 pdbt20">
					{{ $category->description }}
				</div>
			</div>
		@endforeach
	@endif
@endsection
