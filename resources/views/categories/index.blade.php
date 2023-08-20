@extends('layouts.main')

@section('content')
    <div class="container mt-3">
        <h2>Categories</h2>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Create New Category</a>
        <div class="row mt-3">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <a href="{{ route('categories.show', [$category->id]) }}">
                            <img src="{{ $category->image }}" class="card-img-top" alt="{{ $category->title }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->title }}</h5>
                            <p class="card-text">{{ $category->description }}</p>
                            <p class="card-text"><strong>Price Per Hour:</strong> {{ $category->price_per_hour }}</p>
                            <p class="card-text"><strong>Price Per Day:</strong> {{ $category->price_per_day }}</p>


                            <div class="card-footer small">
                                <a href="{{ route('spaces.index') }}" class="btn btn-secondary">View Spaces</a>
                                <a href="{{ route('categories.edit', $category->id) }}"
                                    class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
