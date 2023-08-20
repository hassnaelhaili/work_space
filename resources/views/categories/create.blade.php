@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Create Category</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="price_per_hour">Price Per Hour:</label>
                <input type="number" class="form-control" id="price_per_hour" name="price_per_hour" required>
            </div>
            <div class="form-group">
                <label for="price_per_day">Price Per Day:</label>
                <input type="number" class="form-control" id="price_per_day" name="price_per_day" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
