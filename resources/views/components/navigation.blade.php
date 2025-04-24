<header>
    <nav>
        <ul>
            @guest
                <li><a href="/">Sākums</a></li>
            @endguest
            <li><a href="/why">Kāpēc darāmo darbu saraksts ir nepieciešams?</a></li>

            @auth
                <li><a href="/todos/create">Izveidot uzdevumu</a></li>
                <li><a href="/todos">Visi uzdevumi</a></li>
                <li><a href="/diaries/create">Izveidot ierakstu</a></li>
                <li><a href="/diaries">Visi dienasgrāmatas ieraksti</a></li>
                <!-- Logout Button -->
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit">Izrakstīties</button>
                    </form>
                </li>
            @endauth

            @guest
                <li><a href="/login">Pieslēgties</a></li>
                <li><a href="/register">Reģistrēties</a></li>
            @endguest
        </ul>
    </nav>
</header>
