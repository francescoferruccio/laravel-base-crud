<?php

namespace App\Http\Controllers;
use App\Omino;

use Illuminate\Http\Request;

class OminiController extends Controller
{
  public function index() {
    $omini = Omino::all();

    return view('home', compact('omini'));
  }

  public function show($id) {
    $omino = Omino::findOrFail($id);

    return view('showOmino', compact('omino'));
  }
}
