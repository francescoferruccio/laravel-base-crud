@extends('layouts.mainLayout')

@section('content')
  Nome: {{ $cagnolino['nome'] }} <br>
  Tipo: {{ $cagnolino['tipo'] }} <br>
  Altezza: {{ $cagnolino['altezza'] }} cm <br>
  Peso: {{ $cagnolino['peso'] }} kg <br>
@endsection
