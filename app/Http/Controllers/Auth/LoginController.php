<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Two\User as OauthUser;
use Session;
use Socialite;

class LoginController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/home';


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('guest')->except('logout');
	}


	/**
	 * Redirect the user to the GitHub authentication page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function redirectToProvider() {
		return Socialite::driver(config('services.socialite_driver'))->redirect();
	}


	/**
	 * Obtain the user information from GitHub.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function handleProviderCallback(Request $request) {
		/** @var OauthUser $oauthUser */
		$oauthUser = Socialite::driver(config('services.socialite_driver'))->user();

		/** @var User $user */
		$user = User::query()
			->where('email', $oauthUser->getEmail())
			->first();

		if (!$user) {
			/*
			 * User does not exist. Redirect to register.
			 */
			Session::put('register_user', $oauthUser);
			return redirect(route('register'));
		}

		//Update Name and Avatar
		$user->update([
			'name' => $oauthUser->getName(),
			'avatar' => $oauthUser->getAvatar(),
		]);

		Auth::login($user);

		return redirect()->intended(route('dashboard'));
	}


	public function logout() {
		Auth::logout();

		return redirect()->route('welcome');
	}
}
