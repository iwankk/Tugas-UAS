<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index() 
	{
		$data['pelanggan'] = \DB::table('pelanggan')
		->get();
		return view ('pelanggan', $data);
		
}
