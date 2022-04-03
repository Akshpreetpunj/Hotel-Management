@extends('layouts.app')

@section('content')
    <h1>Create Hotel Rooms</h1>

    <form method="post" action="{{ url('/rooms') }}">
    @csrf
        <div class="form-group">
            <label for="room_number">Room Number:</label>
            <input type="text" class="form-control" name="room_number" id="room_number"/>
        </div>
        <div class="form-group">
            <label for="room_name">Room Name:</label>
            <input type="text" class="form-control" name="room_name" id="room_name"/>
        </div>
        <div class="form-group">
            <label for="room_name">Room Description:</label>
            <input type="text" class="form-control" name="room_description" id="room_description"/>
        </div>
        <div class="form-group">
            <label for="room_name">Max Occupancy:</label>
            <input type="text" class="form-control" name="max_occupancy" id="max_occupancy"/>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection