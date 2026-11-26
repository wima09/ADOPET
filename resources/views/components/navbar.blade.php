
<nav class="navbar">
    <div class="container nav-content">

        <a href="{{ route('home') }}" class="brand">
            <span>🐾</span> Paw<span>Care.</span>
        </a>

        <button class="menu-toggle" id="menuToggle">
            ☰
        </button>

        <div class="nav-links" id="navLinks">

            <a href="{{ route('home') }}"
                class="{{ request()->routeIs('home') ? 'active' : '' }}">
                Beranda
            </a>

            <a href="{{ route('adoption') }}"
                class="{{ request()->routeIs('adoption', 'pet.detail') ? 'active' : '' }}">
                Adopsi
            </a>

            <a href="{{ route('services') }}">Layanan</a>

            <a href="{{ route('about') }}">Tentang Kami</a>

            <div class="mobile-auth">
                <a href="{{ route('login') }}" class="btn-outline">Masuk</a>
                <a href="{{ route('register') }}" class="btn-primary">Daftar</a>
            </div>
        </div>

        <div class="nav-auth">
            <a href="{{ route('login') }}" class="btn-outline">Masuk</a>
            <a href="{{ route('register') }}" class="btn-primary">Daftar Sekarang</a>
        </div>

    </div>
</nav>
