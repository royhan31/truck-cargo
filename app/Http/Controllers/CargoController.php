<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargoController extends Controller
{
  public function __constract(){
    $this->middleware('auth');
  }

  public function index(){
    return view('home.cargo');
  }
}
