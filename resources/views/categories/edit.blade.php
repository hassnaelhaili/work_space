@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Edit Category</h2>
        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}"
                    required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $category->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price_per_hour">Price Per Hour:</label>
                <input type="number" class="form-control" id="price_per_hour" name="price_per_hour"
                    value="{{ $category->price_per_hour }}" required>
            </div>
            <div class="form-group">
                <label for="price_per_day">Price Per Day:</label>
                <input type="number" class="form-control" id="price_per_day" name="price_per_day"
                    value="{{ $category->price_per_day }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
