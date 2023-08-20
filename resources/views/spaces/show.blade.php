@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Space Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $space->name }}</h5>
                <p class="card-text"><strong>Category:</strong> {{ $space->category->title }}</p>
                <p class="card-text"><strong>ID:</strong> {{ $space->id }}</p>
                <!-- Add more space details here -->
                <a href="{{ route('spaces.index') }}" class="btn btn-primary">Back to Spaces</a>
            </div>
        </div>
    </div>
@endsection
