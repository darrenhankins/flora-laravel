<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

	public function register() {

		return view('pages.register');

	}

	public function login() {

		return view('pages.login');

	}

	public function see_flora() {

		return view('pages.see_flora');

	}

	public function flora() {

		return view('pages.flora');

	}

	public function new_flora() {

		return view('pages.new_flora');

	}

	

}
