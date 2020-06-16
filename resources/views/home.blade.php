@extends('layouts.mainLayout')

@section('content')
  <main>
    <ul>
      @foreach ($cagnolini as $cagnolino)
          <li>{{ $cagnolino['nome'] }}</li>
      @endforeach
    </ul>
  </main>
@endsection
