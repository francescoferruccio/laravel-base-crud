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

  public function create() {
    return view('create');
  }

  public function store(Request $request) {
    $data = $request->all();

    $omino = new Omino;

    $omino -> first_name = $data['first_name'];
    $omino -> last_name = $data['last_name'];
    $omino -> address = $data['address'];
    $omino -> code = $data['code'];
    $omino -> state = $data['state'];
    $omino -> phone_number = $data['phone_number'];
    $omino -> role = $data['role'];

    $omino -> save();

    return redirect() -> route('home');
  }

  public function delete($id) {
    $omino = Omino::findOrFail($id);

    $omino -> delete();

    return redirect() -> route('home');
  }
}
