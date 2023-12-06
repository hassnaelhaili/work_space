@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Bookings</h2>
        <a href="{{ route('bookings.create') }}" class="btn btn-primary">Create New Booking</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Guest Name</th>
                    <th>Space</th>
                    <th>Start At</th>
                    <th>Closed At</th>
                    <th>Paid Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->guest_name }}</td>
                        <td>{{ $booking->space->name }}</td>
                        <td>{{ $booking->start_at }}</td>
                        <td>{{ $booking->closed_at ?? 'Not closed' }}</td>
                        <td>{{ $booking->paid_amount }}</td>
                        <td>
                            <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
