<nav class="nav">
    <ul class="nav-list">
        <li>
            <a class="nav-list__link" href="{{ route('get.home') }}">
                Kewlgame
            </a>
        </li>
        @guest
        <li>
            <a class="nav-list__link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li>
            <a class="nav-list__link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-list__text">
            {{ Auth::user()->name }}
        </li>
        <li class="nav-item dropdown">
            <div>
                <a class="nav-list__link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>
</nav>