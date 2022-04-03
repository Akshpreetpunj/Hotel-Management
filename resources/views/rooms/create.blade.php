@extends('layouts.app')

@section('content')
    <h1>Create Hotel Rooms</h1>

    <form method="post" action="{{ url('/rooms') }}">
    @csrf
        <div class="form-group">
            <label for="id">Room Number:</label>
            <input type="number" class="form-control" name="id" id="id" placeholder="Room Number"/>
        </div>
        <div class="form-group">
            <label for="room_name">Room Name:</label>
            <input type="text" class="form-control" name="room_name" id="room_name" placeholder="Room Name"/>
        </div>
        <div class="form-group">
            <label for="room_description">Room Description:</label>
            <input type="text" class="form-control" name="room_description" id="room_description" placeholder="Room Description"/>
        </div>
        <div class="form-group">
            <label for="max_occupancy">Max Occupancy:</label>
            <input type="number" class="form-control" name="max_occupancy" id="max_occupancy" placeholder="Max Occupancy"/>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection