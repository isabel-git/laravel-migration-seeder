@extends('layouts.main-layout')

@section('content')
    <h1>Locations</h1>

    <ul>

        @foreach ($locations as $location)
            <li>{{ $location -> name}}</li>

        @endforeach

    </ul>
@endsection