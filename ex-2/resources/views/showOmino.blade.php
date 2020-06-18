@extends('layouts.main_layout')

@section('content')
  <div>
    <h3>Dettagli omino</h3>
    <ul>
      <li>Nome: {{ $omino['first_name'] }}</li>
      <li>Cognome: {{ $omino['last_name'] }}</li>
      <li>Indirizzo: {{ $omino['address'] }}</li>
      <li>CAP: {{ $omino['code'] }}</li>
      <li>Stato: {{ $omino['state'] }}</li>
      <li>Telefono: {{ $omino['phone_number'] }}</li>
      <li>Lavoro: {{ $omino['role'] }}</li>
    </ul>
  </div>
@endsection
