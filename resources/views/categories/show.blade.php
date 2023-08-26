@extends('layouts.main')

@section('content')
    <h2>Category Details</h2>
    <div class="container mt-4">

        <div class="card" style="width: 18rem;">
            <div class="card-body">

                <img src="{{ '/' . $category->image }}" class="card-img-top" alt="">
                <h4 class="card-title">{{ $category->title }}</h4>
                <p class="card-text">{{ $category->description }}</p>
                <p class="card-text"><strong>Price Per Hour:</strong> {{ $category->price_per_hour }}</p>
                <p class="card-text"><strong>Price Per Day:</strong> {{ $category->price_per_day }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('categories.index') }}" class="btn btn-primary">Back</a>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('Are you sure?')">Delete</button>
                </form>
                <a href="{{ route('spaces.index', ['category_id' => $category->id]) }}"
                    class="btn btn-sm btn-secondary">Spaces</a>
            </div>
        </div>
    </div>
@endsection
