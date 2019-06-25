<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;

class CargoController extends Controller
{
  public function __constract(){
    $this->middleware('auth');
  }

  public function index(){
    return view('home.dashboard');
  }

  public function create(){
    $cargos = Cargo::orderBy('id', 'DESC')->get();
    return view('home.cargo', compact('cargos'));
  }

  public function store(Request $request){
    //dd($request->all());
    $this->validate($request,[
      'plat_nomor' => 'required|min:4|max:10',
      'berat' => 'required|min:2|max:11',
      'nama_supir' => 'required|min:5|max:30'
    ]);
    $berat = str_replace('.','',$request->berat);
    Cargo::create([
      'plat_nomor' => $request->plat_nomor,
      'berat' => $berat,
      'nama_supir' => $request->nama_supir,
      'tanggal' => now()->format('Y-m-d')
    ]);

    return redirect()->route('cargo')->with('success','Data berhasil ditambahkan');

  }
}
