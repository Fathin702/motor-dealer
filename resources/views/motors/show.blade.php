@extends('layouts.app')

@section('title', $motor->name)

@section('content')
    <h1 class="title">{{ $motor->name }}</h1>
    <figure class="image is-4by3">
        <img src="{{ $motor->image_url }}" alt="Motor image">
    </figure>
    <div class="content">
        <h2 class="subtitle">Specifications</h2>
        <ul>
            <li><strong>Engine:</strong> {{ $specification->engine }}</li>
            <li><strong>Horsepower:</strong> {{ $specification->horsepower }} HP</li>
            <li><strong>Torque:</strong> {{ $specification->torque }} Nm</li>
            <li><strong>Price:</strong> ${{ $specification->price }}</li>
        </ul>
        <a href="{{ url('/') }}" class="button is-link">Back to Motors</a>
    </div>
@endsection
