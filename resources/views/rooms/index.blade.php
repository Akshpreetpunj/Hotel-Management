@extends('layouts.app')

{{-- "StAuth10127: I Akshpreet Singh Punj, 000820040 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else." --}}

@section('content')
    <h2>Rooms</h2>
    <a href="/rooms/create" type="button" class="btn btn-success btn-sm mb-3">Create New Room</a>

    {{-- Rooms Table --}}
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Room Number</th>
                <th>Room Name</th>
                <th>Room Description</th>
                <th>Max Occupancy</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        
        <tbody>
            @if(count($rooms) > 0)
                @foreach($rooms as $room)
                    <tr>
                        <th>{{$room->id}}</th>
                        <td>{{$room->room_name}}</td>
                        <td>{{$room->room_description}}</td>
                        <td>{{$room->max_occupancy}}</td>
                        <td><a href="/rooms/{{$room->id}}/edit" type="button" class="btn btn-primary btn-sm">Edit</a></td>
                        <td>
                            <form action="{{ url('/rooms') . '/' . $room->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
            <tr>
                <th>No Rooms Found</th>
            </tr>
            @endif
        </tbody>
    </table>
@endsection