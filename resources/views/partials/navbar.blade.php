<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item {{ Request::is('features') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/features') }}">Features</a>
            </li>
        </ul>
    </div>
</nav>