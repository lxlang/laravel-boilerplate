<?php

namespace App\Http\Controllers;

use View;

class HomeController extends Controller {
	public function welcome() {
		return View::make('welcome');
	}

}
