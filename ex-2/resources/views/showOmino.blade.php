@extends('layouts.main_layout')

@section('content')
  <div class='show-omino'>
    <h3>Dettagli omino</h3>
    <div class="details">
      <div class="labels">
        <b>Nome:</b>
        <b>Cognome: </b>
        <b>Indirizzo: </b>
        <b>CAP: </b>
        <b>Stato: </b>
        <b>Telefono: </b>
        <b>Lavoro: </b>
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
