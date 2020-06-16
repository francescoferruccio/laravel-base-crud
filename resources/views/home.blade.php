@extends('layouts.mainLayout')

@section('content')
    <ul>
      @foreach ($cagnolini as $cagnolino)
        <a href=" {{ route('show', $cagnolino['id']) }}">
          <li>{{ $cagnolino['nome'] }}</li>
        </a>
      @endforeach
    </ul>
@endsection
