<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
    	return "Ini adalah index Page Book";
    }

    public function viewJudul($judul) {
    	return view ('book', compact('judul'));
    }
}
