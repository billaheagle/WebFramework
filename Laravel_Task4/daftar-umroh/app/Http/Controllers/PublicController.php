<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function PendaftaranUmroh() {
    	return view('public.pendaftaran-umroh');
    }

    public function JadwalKeberangkatan() {
		return view('public.jadwal-keberangkatan');
    }
}
