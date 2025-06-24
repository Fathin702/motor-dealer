@extends('layouts.app')

@section('title', 'Motors')

@section('content')
    <h1 class="title">Motors</h1>
    <div class="columns is-multiline">
        @foreach ($motors as $motor)
            <div class="column is-one-quarter">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="{{ $motor->image_url }}" alt="Motor image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">{{ $motor->name }}</p>
                            </div>
                        </div>
                        <div class="content">
                            <a href="{{ url('/motor/' . $motor->id) }}" class="button is-link">View Specifications</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
