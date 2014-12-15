@extends('master')

@section('title')
	Add a new request
@stop

@section('content')

	<h1>Add a new request</h1>

	{{ Form::open(array('url' => '/request/create')) }}


		{{ Form::label('subject','Subject') }}
		{{ Form::text('subject'); }}

		
		
		{{ Form::label('icon','Icon Image URL') }}
		{{ Form::text('icon'); }}

		{{ Form::label('email_link','Email Link URL') }}
		{{ Form::text('email_link'); }}

		{{ Form::submit('Add'); }}

	{{ Form::close() }}

@stop