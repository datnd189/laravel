@extends('layouts.app')

@section('content')
<h1>Message</h1>
	@if(count($message) > 0)
		@foreach($message as $message)
			<ul class="list-group">
				<li class="list-group-item">
					Name: {{ $message->name }}
				</li>
				<li class="list-group-item">
					Email: {{ $message->email }}
				</li>
				<li class="list-group-item">
					Message: {{ $message->message }}
				</li>
			</ul>

		@endforeach
	@endif
@endsection

@section('sidebar')
	@parent
	<p>this is append to the sidebar</p>

@endsection