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

  <form action="{{ route('update', $omino['id']) }}" method="post">
    @csrf
    @method('POST')
    <div class="form">
      <div class="row">
        <label for="first_name">FIRST NAME</label>
        <input type="text" name="first_name" value="{{ $omino['first_name'] }}">
      </div>
      <div class="row">
        <label for="last_name">LAST NAME</label>
        <input type="text" name="last_name" value="{{ $omino['last_name'] }}">
      </div>
      <div class="row">
        <label for="address">ADDRESS</label>
        <input type="text" name="address" value="{{ $omino['address'] }}">
      </div>
      <div class="row">
        <label for="code">CODE</label>
        <input type="text" name="code" value="{{ $omino['code'] }}">
      </div>
      <div class="row">
        <label for="state">STATE</label>
        <input type="text" name="state" value="{{ $omino['state'] }}">
      </div>
      <div class="row">
        <label for="phone_number">PHONE NUMBER</label>
        <input type="text" name="phone_number" value="{{ $omino['phone_number'] }}">
      </div>
      <div class="row">
        <label for="role">ROLE</label>
        <input type="text" name="role" value="{{ $omino['role'] }}">
      </div>
    </div>
    <div class="button">
      <button type="submit" name="submit">MODIFICA</button>
    </div>
  </form>
@endsection
