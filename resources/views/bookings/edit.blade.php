@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Edit Booking</h2>
        <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="guest_name">Guest Name:</label>
                <input type="text" class="form-control" id="guest_name" name="guest_name" value="{{ $booking->guest_name }}"
                    required>
            </div>
            <div class="form-group">
                <label for="space_id">Space:</label>
                <select class="form-control" id="space_id" name="space_id" required>
                    @foreach ($spaces as $space)
                        <option value="{{ $space->id }}" {{ $space->id == $booking->space_id ? 'selected' : '' }}>
                            {{ $space->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="start_at">Start At:</label>
                <input type="datetime-local" class="form-control" id="start_at" name="start_at"
                    value="{{ \Carbon\Carbon::parse($booking->start_at)->format('Y-m-d\TH:i') }}" required>
            </div>
            <div class="form-group">
                <label for="paid_amount">Paid Amount:</label>
                <input type="number" class="form-control" id="paid_amount" name="paid_amount"
                    value="{{ $booking->paid_amount }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
