@extends('layouts.main-layout')

@section('content')
    <h1>Brands</h1>

    @foreach ($brands as $brand)
        <a href="{{ route('brand-show', $brand -> id) }}">
            
            <li>{{ $brand -> name }}</li>
        </a>
    @endforeach
@endsection