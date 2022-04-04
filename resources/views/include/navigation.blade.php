{{-- "StAuth10127: I Akshpreet Singh Punj, 000820040 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else." --}}

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/"></a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-4">
            <li class="{{ (request()->is('about') || (request()->is('/')) ) ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-item nav-link pr-4" href="{{ route('about') }}">About</a>
            </li>
            <li class="{{ (request()->is('rooms')) ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-item nav-link pr-4" href="{{ route('rooms') }}">Rooms</a>
            </li>
            <li class="{{ (request()->is('bookings')) ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-item nav-link pr-4" href="{{ route('bookings') }}">Bookings</a>
            </li>
        </ul>
    </div>
  </div>
</nav>