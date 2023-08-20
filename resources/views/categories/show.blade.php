@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h2>Category Details</h2>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h1 class="card-title">Category Title: {{ $category->title }}</h1>
                <p class="card-text">{{ $category->description }}</p>
                <p class="card-text"><strong>Price Per Hour:</strong> {{ $category->price_per_hour }}</p>
                <p class="card-text"><strong>Price Per Day:</strong> {{ $category->price_per_day }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('categories.index') }}" class="btn btn-primary">Back to Categories</a>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                <a href="{{ route('spaces.index', ['category_id' => $category->id]) }}"
                    class="btn btn-sm btn-secondary">View Spaces</a>
            </div>
        </div>
    </div>
@endsection
