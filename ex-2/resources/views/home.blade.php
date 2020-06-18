@extends('layouts.main_layout')

@section('content')
  <h1>Lista omini</h1>
    @foreach ($omini as $omino)
      <div>
        <a href="{{ route('show', $omino['id']) }}">
          {{ $omino['first_name'] }}
          {{ $omino['last_name'] }}
        </a>
      </div>
    @endforeach
@endsection
