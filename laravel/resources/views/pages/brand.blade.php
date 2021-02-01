@extends('layouts.main-layout')

@section('content')
    <h1>Brands</h1>

    @foreach ($brands as $brand)
        <li>{{ $brand -> name }}</li>
    @endforeach
@endsection