@extends('layouts.main_layout')

@section('content')
  <form action="{{ route('store') }}" method="post">
    @csrf
    @method('POST')
    <label for="first_name">Nome</label>
    <input type="text" name="first_name" value=""> <br>
    <label for="last_name">Cognome</label>
    <input type="text" name="last_name" value=""> <br>
    <label for="address">Indirizzo</label>
    <input type="text" name="address" value=""> <br>
    <label for="code">CAP</label>
    <input type="text" name="code" value=""> <br>
    <label for="state">Stato</label>
    <input type="text" name="state" value=""> <br>
    <label for="phone_number">Telefono</label>
    <input type="text" name="phone_number" value=""> <br>
    <label for="role">Lavoro</label>
    <input type="text" name="role" value=""> <br>
    <button type="submit" name="submit">CREA</button>
  </form>
@endsection
