<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller {
	public function getRegister() {
		return view('auth.register');
	}


	public function postRegister(Request $request) {
		$validator = \Validator::make($request->all(), [
			'privacy_policy' => 'required'
		]);

		if ($validator->fails()) {
			return redirect(route('register'))
				->withErrors($validator->errors());
		}

		/** @var \Laravel\Socialite\Two\User $oauthUser */
		$oauthUser = Session::pull('register_user');

		User::create([
			//Name will be updated at login
			'name' => $oauthUser->getName(),
			'email' => $oauthUser->getEmail(),
			'avatar' => $oauthUser->getAvatar(),
		]);

		return redirect(route('login'));
	}
}
