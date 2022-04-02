@extends('layouts.app')

@section('content')
    <h1>Rooms Bookings</h1>
    <a href="/rooms/create" type="button" class="btn btn-success btn-sm mb-3">Create New Rooms</a>

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
                        <td><a href="/" type="button" class="btn btn-primary btn-sm">Delete</a></td>
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