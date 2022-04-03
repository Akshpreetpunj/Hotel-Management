@extends('layouts.app')

@section('content')
    <h1>Create Hotel Rooms</h1>

    {!! Form::open(['url' => '//http://still-journey-97048.herokuapp.com/rooms', 'method'=> 'POST']) !!}
  @csrf
    <div class="form-group">
      {{Form::label('id', 'Room Number')}}
      {{Form::number('id', '', ['class' => 'form-control', 'placeholder' => 'Room Number'])}}
    </div>
    <div class="form-group">
      {{Form::label('name', 'Room Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Room Name'])}}
    </div>
    <div class="form-group">
      {{Form::label('description', 'Room Description')}}
      {{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Room Description'])}}
    </div>
    <div class="form-group">
      {{Form::label('max_occupancy', 'Max Occupancy')}}
      {{Form::number('max_occupancy', '', ['class' => 'form-control', 'placeholder' => 'Max Occupancy'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btm btn-primary'])}}
  {!! Form::close() !!}

@endsection