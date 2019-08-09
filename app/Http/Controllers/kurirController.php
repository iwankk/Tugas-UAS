<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kurirController extends Controller
{
     public function index() 
	{
		$data['kurir'] = \DB::table('kurir')
		->get();
		return view ('kurir', $data);
}
public function create()
	{
	return view('kurir.formkurir');
	}
public function store(Request $request)
	{
		$rule = [
			'id' => 'required',
			'nama' => 'required',
			'email' =>  ['required'],
			'pass' => ['required'],
		];
		$this->validate($request, $rule);
		
		$input = $request->all();
		unset($input['_token']);
		$status = \DB::table('kurir')->insert($input);
		
		if ($status) {
			return redirect('/kurir')->with('success', 'Data berhasil ditambahkan');
		
		}else {
			
			return redirect('/kurir/create')->with('error', 'Data gagal ditambahkan');
			}
		}
	public function edit(Request $request, $kurir)
		{
			$data['konsumen'] = \DB::table('konsumen')->find($kurir);
			return view('konsumen.formkonsumen',$data);
		}
	public function update(Request $request, $kurir)
	{
		$rule = [
			'id' => 'required',
			'nama' => 'required',
			'email' =>  ['required'],
			'pass' => ['required'],
		];
		$this->validate($request, $rule);
		
		$input = $request->all();
		unset($input['_token']);
		unset($input['_method']);
		
		$status = \DB::table('kurir')->where('kurir', $kurir)->update($input);
		
		if ($status) {
			return redirect('/kurir')->with('success','Data berhasil diubah');
		} else {
			return redirect('/kurir/create')->with('error','Data gagal diubah');
		}
	}
	public function destroy(Request $request,$id)
		{
		$status=\DB::table('kurir')->where('id',$id)->delete();
		if ($status) {
				return redirect('/kurir')->with('success', 'Data berhasil dihapus');
				} else {
					return  redirect('/kurir/create')->with('error', 'Data gagal dihapus');
					}
	}
}
