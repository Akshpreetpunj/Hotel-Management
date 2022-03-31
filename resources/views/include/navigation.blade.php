<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/"></a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-4">
            <li class="{{ (request()->is('about') || (request()->is('/')) ) ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-item nav-link pr-4" href="/about">About</a>
            </li>
            <li class="{{ (request()->is('rooms')) ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-item nav-link pr-4" href="/rooms">Rooms</a>
            </li>
            <li class="{{ (request()->is('bookings')) ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-item nav-link pr-4" href="/bookings">Bookings</a>
            </li>
        </ul>
    </div>
  </div>
</nav>