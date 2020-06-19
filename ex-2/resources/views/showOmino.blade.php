@extends('layouts.main_layout')

@section('content')
  @if (session('success'))
    <div class="success">
      <h2>{{ session('success') }}</h2>
    </div>
  @endif

  <div class='show-omino'>
    <h3>Dettagli omino</h3>
    <div class="details">
      <div class="labels">
        <p><b>FIRST NAME:</b></p>
        <p><b>LAST NAME: </b></p>
        <p><b>ADDRESS: </b></p>
        <p><b>CODE: </b></p>
        <p><b>STATE: </b></p>
        <p><b>PHONE NUMBER: </b></p>
        <p><b>ROLE: </b></p>
      </div>
      <div class="values">
        <p>{{ $omino['first_name'] }}</p>
        <p>{{ $omino['last_name'] }}</p>
        <p>{{ $omino['address'] }}</p>
        <p>{{ $omino['code'] }}</p>
        <p>{{ $omino['state'] }}</p>
        <p>{{ $omino['phone_number'] }}</p>
        <p>{{ $omino['role'] }}</p>
      </div>
    </div>
    <div class="options">
      <a href="{{ route('edit', $omino['id']) }}">
        <h4>MODIFICA OMINO</h4>
      </a>
      <a href="{{ route('delete', $omino['id']) }}">
        <h4 id='delete'>CANCELLA OMINO</h4>
      </a>
    </div>
  </div>
@endsection
