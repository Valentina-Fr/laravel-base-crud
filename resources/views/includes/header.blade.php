<header class="container">
    <div class="row align-items-center">
        <div class="col-2">
            <a href="{{ url('/') }}" class="d-block">
                <img src="{{ asset('images/dc-logo.png') }}" alt="logo" id="logo">
            </a>
        </div>
        <div class="col-10 d-flex align-items-center">
            <ul>
                <li><a href="#">CHARACTERS</a></li>
                <li><a href="{{route('comics.index')}}" class="{{ request()->routeIs('comics.index')? 'active' : ''}}">COMICS</a></li>
                <li><a href="#">MOVIES</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">GAMES</a></li>
                <li><a href="#">COLLECTIBLES</a></li>
                <li><a href="#">VIDEOS</a></li>
                <li><a href="#">FANS</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">SHOP</a></li>
            </ul>
            <form method="GET" action="{{ route('comics.index') }}">
                <input type="text" placeholder="Search" name="search">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</header>
