@extends('adminlte::login')

@section('title', Config::get('adminlte.title'))

@section('body')
	<div class="login-box">
		<div class="login-logo">
			<a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">{{ trans('adminlte::adminlte.login_message') }}</p>
			<p class="login-box-msg">
				<a href="{{ route('login') }}" class="btn btn-primary">Login</a>
			</p>
		</div>
		<!-- /.login-box-body -->
	</div>
@endsection%