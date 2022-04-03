@extends('layouts.app')

@section('content')
    <h1>Hotel Rooms</h1>

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
                        <!--
                        <td><a href="/rooms/{{$room->id}}/edit" type="button" class="btn btn-primary btn-sm">Edit</a>
                            {!! Form::open(['url' => '//still-journey-97048.herokuapp.com/rooms/' . $room->id, 'method'=> 'POST']) !!}
                            @csrf
                            {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete'), ['class' => 'btn btn-danger btn-sm']}}
                            {!!Form::close()!!}
                        </td>
-->
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