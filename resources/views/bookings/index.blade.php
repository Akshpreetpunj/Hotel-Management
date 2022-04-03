@extends('layouts.app')

@section('content')
    <h2>Rooms Bookings</h2>
    <h3>Create New Bookings</h3>

    <form method="post" action="{{ url('/bookings') }}">
    @csrf
        <div class="form-group">
            <label for="room_number">Room Number:</label>
            <input type="number" class="form-control" name="room_number" id="room_number" placeholder="Room Number" required/>
        </div>
        <div class="form-group">
            <label for="guest_name">Guest Name:</label>
            <input type="text" class="form-control" name="guest_name" id="guest_name" placeholder="Guest Name" required/>
        </div>
        <div class="form-group">
            <label for="date">Booking Date:</label>
            <input type="date" class="form-control" name="date" id="date" placeholder="Date" required/>
        </div>
        
        <button type="submit" class="btn btn-primary my-4">Submit</button>
      </form>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Room Number</th>
                <th>Room Name</th>
                <th>Guest Name</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if(count($bookings) > 0)
                @foreach($bookings as $booking)
                    <tr>
                        <th>{{$booking->room_number}}</th>
                        <td>{{$booking->room_name}}</td>
                        <td>{{$booking->guest_name}}</td>
                        <td>{{$booking->date}}</td>
                        <td>
                            <form action="{{ url('/bookings') . '/' . $booking->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
            <tr>
                <th>No Bookings Found</th>
            </tr>
            @endif
        </tbody>
    </table>
@endsection