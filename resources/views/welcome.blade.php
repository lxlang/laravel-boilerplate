@extends('adminlte::page')

@section('title', Config::get('adminlte.title'))

@section('js')
@endsection

@section('content_header')
@stop

@section('content')
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">{!! Config::get('adminlte.logo') !!}</h1>
			<p class="lead">Happy Hacking!</p>
		</div>
	</div>
@stop
