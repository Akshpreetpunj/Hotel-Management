@extends('layouts.app')

@section('content')
    <h1>Create Hotel Rooms</h1>

    {!! Form::open(['url' => '{{url('/rooms')}}', 'method'=> 'POST']) !!}

    @csrf
        <div class="form-group">
            {{Form::label('id', 'Room Number')}}
            {{Form::number('id', '', ['class' => 'form-control', 'placeholder' => 'Room Number'])}}
        </div>
        <div class="form-group">
            {{Form::label('room_name', 'Room Name')}}
            {{Form::text('room_name', '', ['class' => 'form-control', 'placeholder' => 'Room Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('room_description', 'Room Description')}}
            {{Form::text('room_description', '', ['class' => 'form-control', 'placeholder' => 'Room Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('max_occupancy', 'Max Occupancy')}}
            {{Form::number('max_occupancy', '', ['class' => 'form-control', 'placeholder' => 'Max Occupancy'])}}
        </div>
        {{Form::submit('Submit', ['Class' => 'btn btn-primary'])}}
    {!! Form::close() !!}    

@endsection