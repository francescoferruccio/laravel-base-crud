@extends('layouts.main_layout')

@section('content')
  <div class="index">
    <h1>Lista omini</h1>
    @foreach ($omini as $omino)
      <div class='omino'>
        <a href="{{ route('show', $omino['id']) }}">
          {{ $omino['first_name'] }}
          {{ $omino['last_name'] }}
        </a>
      </div>
    @endforeach
    <div class="new-omino">
      <h3><a href="{{ route('create') }}">CREA NUOVO OMINO</a></h3>
    </div>
  </div>
@endsection
