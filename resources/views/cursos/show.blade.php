@extends('layouts.plantilla')

@section('title', 'Bienvenido al curso '. $curso)

@section('content')
    <h1>Bienvenido al curso: {{$curso}}</h1>
@endsection
