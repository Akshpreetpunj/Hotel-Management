@extends('layouts.app')

@section('content')
    <h2>Edit Room Description</h2>

    <form method="post" action="{{ url('/rooms') . '/' . $room->id }}">
    @csrf
    @method('PATCH')
        <div class="form-group">
            <label for="room_description">Room Description:</label>
            <input type="text" class="form-control" name="room_description" id="room_description" placeholder="Room Description" value="{{ $room->room_description }}" required/>
        </div>
        
        <button type="submit" class="btn btn-primary my-4">Submit</button>
      </form>
@endsection