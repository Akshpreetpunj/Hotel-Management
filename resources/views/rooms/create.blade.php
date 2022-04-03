@extends('layouts.app')

@section('content')
    <h1>Create Hotel Rooms</h1>

    <form method="post" action="{{ url('/rooms') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">Game Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="cases">Price :</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Game</button>
      </form>

@endsection