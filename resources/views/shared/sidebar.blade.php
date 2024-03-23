@auth
<aside class="sidebar">
    <ul>
        <li>
            <a class="sidebar__link" href="{{ route('get.home')}}">
                Home
            </a>
        </li>
        <li>
            <a class="sidebar__link" href="{{ route('get.users')}}">
                Users
            </a>
        </li>
        <li>
            <a class="sidebar__link" href="{{ route('get.user.create')}}">
                Create user
            </a>
        </li>
        <li class="sidebar__sublist">
            <span class="sidebar__group-name">
                Builder
            </span>
            <ul>
                <li>
                    <a class="sidebar__link" href="{{ route('get.b.games.dashboard')}}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a class="sidebar__link" href="{{ route('get.b.games.list')}}">
                        Games
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar__sublist">
            <span class="sidebar__group-name">
                Eloquent
            </span>
            <ul>
                <li>
                    <a class="sidebar__link" href="{{ route('get.e.games.dashboard')}}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a class="sidebar__link" href="{{ route('get.e.games.list')}}">
                        Games
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
@endauth