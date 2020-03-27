<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function DataJamaah() {
    	return view('admin.data-jamaah');
    }

    public function DataKeberangkatan() {
		return view('admin.data-keberangkatan');
    }
}
