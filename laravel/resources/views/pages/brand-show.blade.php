@extends('layouts.main-layout')

@section('content')
    
<h1>{{ $brand -> name }}</h1>
<img src="{{ $brand -> logo }}" alt="">
@endsection