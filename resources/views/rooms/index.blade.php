@extends('layouts.app')

@section('content')
    <h2>Rooms</h2>
    <a href="/rooms/create" type="button" class="btn btn-success btn-sm mb-3">Create New Rooms</a>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Room Number</th>
                <th>Room Name</th>
                <th>Room Description</th>
                <th>Max Occupancy</th>
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