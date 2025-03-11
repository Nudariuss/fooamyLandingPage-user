<nav class="navbar fixed-top navbar-expand-lg custom-navbar bg-white p-md-3">
    <div class="container-fluid navbar-container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/img/logoFooamy-long.png') }}" alt="Fooamy Logo" height="60">
        </a>

        <!-- Toggler Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tentang-kami') ? 'active' : '' }}" href="/tentang-kami">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('daftar-harga-laundry') ? 'active' : '' }}" href="/daftar-harga-laundry">Daftar Harga Laundry</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('bantuan') ? 'active' : '' }}" href="/bantuan">Bantuan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
