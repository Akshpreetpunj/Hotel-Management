@extends('layouts.app')

@section('content')
    <h1>Edit Hotel Room Description</h1>

    {{--{{echo Form::token()}}--}}
    {!! Form::open(['url' => '//still-journey-97048.herokuapp.com/rooms/', 'method'=> 'POST']) !!}
    
    @csrf
        <div class="form-group">
            {{Form::label('room_description', 'Room Description')}}
            {{Form::text('room_description', $room->description, ['class' => 'form-control', 'placeholder' => 'Room Description'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['Class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection