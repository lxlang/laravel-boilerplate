@extends('adminlte::master')

@section('adminlte_css')
	<link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
	@yield('css')
@stop

@section('body_class', 'register-page')

@section('body')
	<div class="register-box">
		<div class="register-logo">
			<a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
		</div>

		<div class="register-box-body">
			<p class="login-box-msg">{{ trans('adminlte::adminlte.register_message') }}</p>
			<form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
				{!! csrf_field() !!}

				{!! BootForm::checkbox('privacy_policy', 'Privacy Policy') !!}

				<button type="submit"
						class="btn btn-primary btn-block btn-flat"
				><i class="fa fa-{{ config('services.socialite_driver') }}"></i> {{ trans('adminlte::adminlte.register') }}</button>
			</form>
			<div class="auth-links">
				<a href="{{ url(config('adminlte.login_url', 'login')) }}"
				   class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
			</div>
		</div>
		<!-- /.form-box -->
	</div><!-- /.register-box -->
@stop

@section('adminlte_js')
	@yield('js')
@stop