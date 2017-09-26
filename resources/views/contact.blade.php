@extends('layouts.app')

@section('content')

	{!! Form::open(['url' => 'contact/submit']) !!}
	  	<legend><h1 class="text-center">Contact</h1></legend>
	  
	  	<div class="form-group">
	  		{{ Form::label('name', 'Name') }}
	  		{{ Form::text('name', '',['class'=> 'form-control','placeholder'=>'Enter Name']) }}
	  	</div>
	  	<div class="form-group">
	  		{{ Form::label('email', 'E-Mail Address') }}
	  		{{ Form::text('email', '',['class'=> 'form-control','placeholder'=>'Email']) }}
	  	</div>
	  	<div class="form-group">
	  		{{ Form::label('message', 'Message') }}
	  		{{ Form::textarea('message', '',['class'=> 'form-control','placeholder'=>'Message']) }}
	  	</div>
	  	
	  	<div>
	  		{{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
	  	</div>
	{!! Form::close() !!}

@endsection
