@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Sometimes you may want to group several middleware under a single key to make them easier to assign to routes. You may do this using the $middlewareGroups property of your HTTP kernel.

Out of the box, Laravel comes with web and api middleware groups that contains common middleware you may want to apply to your web UI and API routes:</p>
@endsection

@section('sidebar')
	@parent
	<p>this is append to the sidebar</p>

@endsection