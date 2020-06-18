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
}
