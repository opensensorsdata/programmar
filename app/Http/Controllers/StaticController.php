<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StaticController extends Controller {

	public function about() {
		return view('static/about');
	}

}
