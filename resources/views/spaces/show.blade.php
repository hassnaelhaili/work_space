@extends('layouts.main')

@section('content')
    <h2>Space Details</h2>
    <div class="container mt-4">

        <div class="card" style="width: 18rem;">

            <div class="card-body">
                <img src="{{ '/' . $space->image }}" class="card-img-top" alt="">
                <h5 class="card-title">{{ $space->title }}</h5>
                <p class="card-text">{{ $space->description }}</p>
                <p class="card-text"><strong>Category:</strong> {{ $space->category->title }}</p>
                <p class="card-text"><strong>ID:</strong> {{ $space->id }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('spaces.edit', $space->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('spaces.destroy', $space->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                <a href="{{ route('spaces.index', ['category_id' => $space->category->id]) }}"
                    class="btn btn-sm btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
