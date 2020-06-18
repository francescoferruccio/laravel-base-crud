@extends('layouts.main_layout')

@section('content')
  <form action="{{ route('store') }}" method="post">
    @csrf
    @method('POST')
    <div class="form">
      <div class="labels">
        <label for="first_name">Nome</label>
        <label for="last_name">Cognome</label>
        <label for="address">Indirizzo</label>
        <label for="code">CAP</label>
        <label for="state">Stato</label>
        <label for="phone_number">Telefono</label>
        <label for="role">Lavoro</label>
      </div>
      <div class="inputs">
        <input type="text" name="first_name" value=""> <br>
        <input type="text" name="last_name" value=""> <br>
        <input type="text" name="address" value=""> <br>
        <input type="text" name="code" value=""> <br>
        <input type="text" name="state" value=""> <br>
        <input type="text" name="phone_number" value=""> <br>
        <input type="text" name="role" value=""> <br>
      </div>
    </div>
    <div class="button">
      <button type="submit" name="submit">CREA</button>
    </div>
  </form>
@endsection
