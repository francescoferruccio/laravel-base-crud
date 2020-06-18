@extends('layouts.main_layout')

@section('content')
  <h1>Lista omini</h1>
    @foreach ($omini as $omino)
      <div>
        {{ $omino['first_name'] }}
        {{ $omino['last_name'] }}
      </div>
    @endforeach
@endsection
