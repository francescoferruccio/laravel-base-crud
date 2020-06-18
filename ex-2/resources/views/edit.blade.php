@extends('layouts.main_layout')

@section('content')
  <form action="{{ route('update', $omino['id']) }}" method="post">
    @csrf
    @method('POST')
    <label for="first_name">Nome</label>
    <input type="text" name="first_name" value="{{ $omino['first_name'] }}"> <br>
    <label for="last_name">Cognome</label>
    <input type="text" name="last_name" value="{{ $omino['last_name'] }}"> <br>
    <label for="address">Indirizzo</label>
    <input type="text" name="address" value="{{ $omino['address'] }}"> <br>
    <label for="code">CAP</label>
    <input type="text" name="code" value="{{ $omino['code'] }}"> <br>
    <label for="state">Stato</label>
    <input type="text" name="state" value="{{ $omino['state'] }}"> <br>
    <label for="phone_number">Telefono</label>
    <input type="text" name="phone_number" value="{{ $omino['phone_number'] }}"> <br>
    <label for="role">Lavoro</label>
    <input type="text" name="role" value="{{ $omino['role'] }}"> <br>
    <button type="submit" name="submit">MODIFICA</button>
  </form>
@endsection
