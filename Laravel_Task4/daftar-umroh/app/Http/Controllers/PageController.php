<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function HomePage() {
    	return view('page.homepage');
    }

    public function Login() {
		return view('page.login');
    }
}
