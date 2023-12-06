@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Create Booking</h2>
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="guest_name">Guest Name:</label>
                <input type="text" class="form-control" id="guest_name" name="guest_name" required>
            </div>
            <div class="form-group">
                <label for="space_id">Space:</label>
                <select class="form-control" id="space_id" name="space_id" required>
                    @foreach ($spaces as $space)
                        <option value="{{ $space->id }}">{{ $space->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="start_at">Start At:</label>
                <input type="datetime-local" class="form-control" id="start_at" name="start_at" required>
            </div>
            <div class="form-group">
                <label for="paid_amount">Paid Amount:</label>
                <input type="number" class="form-control" id="paid_amount" name="paid_amount" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
