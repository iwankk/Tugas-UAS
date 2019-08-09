<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Gambar;
use App\Rules\Lowercase;


class barangController extends Controller
{
    public function index() 
	{
		$data['gambar'] = \DB::table('gambar')
		->get();
		return view ('barang', $data);
}

}

