<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\propinsi;
use App\Models\ms_hadir;
use Carbon\Carbon;

use Illuminate\Support\Facades\View;
class IndexController extends Controller
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
    public function pendaftaran()
    {
      $prop= propinsi::all();
        return view::make('pendaftaran')->with(compact("prop"));
    }
    public function pendaftaran1()
    {
      $prop= propinsi::all();
        return view::make('pendaftaran1')->with(compact("prop"));
    }
    public function store_hadir(Request $request)
    {
      $data_hadir = [
        'asosiasi'=>$request->asosiasi,
        'nama'=>$request->nama,
        'prov'=>$request->provinsi,
        'jabatan'=>$request->jabatan,
        'no_hp'=>$request->no_hp,
        'email'=>$request->email,
        'created_at'=> Carbon::now()->toDateTimeString(),
        'updated_at'=> Carbon::now()->toDateTimeString(),
      ];
      $data_store = ms_hadir::create($data_hadir);
      return view::make('home_munas');
    }
    public function store_hadir1(Request $request)
    {
      $data_hadir = [
        'asosiasi'=>$request->asosiasi,
        'nama'=>$request->nama,
        'prov'=>$request->provinsi,
        'jabatan'=>$request->jabatan,
        'no_hp'=>$request->no_hp,
        'email'=>$request->email,
        'created_at'=> Carbon::now()->toDateTimeString(),
        'updated_at'=> Carbon::now()->toDateTimeString(),
      ];
      $data_store = ms_hadir::create($data_hadir);
      return view::make('home_munas');
    }
}
