@extends('layouts.app')

{{-- "StAuth10127: I Akshpreet Singh Punj, 000820040 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else." --}}

@section('content')
    <h2>Create Rooms</h2>

    <form method="post" action="{{ url('/rooms') }}">
    @csrf
        <div class="form-group">
            <label for="id">Room Number:</label>
            <input type="number" class="form-control" name="id" id="id" placeholder="Room Number" required/>
        </div>
        <div class="form-group">
            <label for="room_name">Room Name:</label>
            <input type="text" class="form-control" name="room_name" id="room_name" placeholder="Room Name" required/>
        </div>
        <div class="form-group">
            <label for="room_description">Room Description:</label>
            <input type="text" class="form-control" name="room_description" id="room_description" placeholder="Room Description" required/>
        </div>
        <div class="form-group">
            <label for="max_occupancy">Max Occupancy:</label>
            <input type="number" class="form-control" name="max_occupancy" id="max_occupancy" placeholder="Max Occupancy" required/>
        </div>
        
        <button type="submit" class="btn btn-primary my-4">Submit</button>
      </form>

@endsection