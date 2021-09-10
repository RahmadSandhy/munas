<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_hadir = DB::table('ms_hadir')->get();
        return view('tampil',['ms_hadir'=>$data_hadir]);
    }
 
public function hapus($id)
{
	
	DB::table('ms_hadir')->where('id',$id)->delete();
		
	
	return redirect('/tampil');
}

public function tambah()
{

	
	return view('tambah');

}

public function store3(Request $request)
{
	
	DB::table('asosiasi')->insert([
		'singkatan' => $request->singkatan,
		'nama' => $request->nama,
		'link' => $request->link,
		'logo' => $request->logo
	]);
	
	return redirect('asosiasi');

}
public function asosiasi()
    {
    	
    	$asosiasi = DB::table('asosiasi')->get();
 
    	
    	return view('asosiasi',['asosiasi' => $asosiasi]);
 
    }
}
