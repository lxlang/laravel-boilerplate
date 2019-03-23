<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
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

		$user = User::create([
			//Name will be updated at login
			'name' => $oauthUser->getName(),
			'email' => $oauthUser->getEmail(),
			'avatar' => $oauthUser->getAvatar(),
		]);

		Auth::login($user);

		return redirect()->intended(route('dashboard'));
	}
}
