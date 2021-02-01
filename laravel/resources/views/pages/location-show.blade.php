@extends('layouts.main-layout')

@section('content')

    <h1>Nome: {{ $location -> name }}</h1>
    <h1>Via: {{ $location -> address }}</h1>

@endsection