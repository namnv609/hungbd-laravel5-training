@extends('layouts.main')

@section('content')
	<span>Create category</span>
	{!! Form::open(['url' => 'categories']) !!}
	{!! Form::text('title',null,array('required','class'=>'form-control','placeholder'=>'Category title')) !!}
	<div id="editor" class="mgt20">
		{!! Form::textarea('description', '', array('required', 'v-model'=>'input', 'debounce'=>'800', 'rows'=>'20', 'class'=>'form-control', 'placeholder'=>'#### Category description')) !!}
	</div>
	<div class="pdt20 pdbt20">
		<div>
			{!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
		</div>
	</div>
	{!! Form::close() !!}
@endsection