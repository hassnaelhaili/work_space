@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h2>Spaces</h2>
        <a href="{{ route('spaces.create') }}" class="btn btn-primary">Create New Space</a>
        <div class="row mt-3">
            @foreach ($spaces as $space)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <a href="{{ route('spaces.show', [$space->id]) }}">
                            <img src="{{ $space->image }}" class="card-img-top" alt="{{ $space->title }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $space->id }}</h5>
                            <h5 class="card-title">{{ $space->name }}</h5>
                            <p class="card-text"><strong>Category:</strong> {{ $space->category->title }}</p>
                            <a href="{{ route('spaces.edit', $space->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('spaces.destroy', $space->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
