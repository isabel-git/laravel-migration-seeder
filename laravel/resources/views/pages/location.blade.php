@extends('layouts.main-layout')

@section('content')
    <h1>Locations</h1>

    <ul>

        @foreach ($locations as $location)

            <a href="{{ route('location-show', $location -> id) }}">
                <li>{{ $location -> name}}</li>
            </a>
        @endforeach

    </ul>
@endsection