@extends('layouts.main_layout')

@section('content')
  @if ($errors->any())
      <div class="error">
        <h2>ATTENZIONE!</h2>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action="{{ route('store') }}" method="post">
    @csrf
    @method('POST')
    <div class="form">
      <div class="labels">
        <label for="first_name">FIRST NAME</label>
        <label for="last_name">LAST NAME</label>
        <label for="address">ADDRESS</label>
        <label for="code">CODE</label>
        <label for="state">STATE</label>
        <label for="phone_number">PHONE NUMBER</label>
        <label for="role">ROLE</label>
      </div>
      <div class="inputs">
        <input type="text" name="first_name" value="{{ old("first_name") }}"> <br>
        <input type="text" name="last_name" value="{{ old("last_name") }}"> <br>
        <input type="text" name="address" value="{{ old("address") }}"> <br>
        <input type="text" name="code" value="{{ old("code") }}"> <br>
        <input type="text" name="state" value="{{ old("state") }}"> <br>
        <input type="text" name="phone_number" value="{{ old("phone_number") }}"> <br>
        <input type="text" name="role" value="{{ old("role") }}"> <br>
      </div>
    </div>
    <div class="button">
      <button type="submit" name="submit">CREA</button>
    </div>
  </form>
@endsection
