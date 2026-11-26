
<footer class="footer">
    <div class="container footer-grid">

        <div>
            <a href="{{ route('home') }}" class="brand footer-brand">
                🐾 PawCare.
            </a>

            <p>
                Setiap hewan berhak mendapatkan rumah
                dan kasih sayang terbaik.
            </p>
        </div>

        <div>
            <h3>Navigasi</h3>
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('adoption') }}">Adopsi</a>
            <a href="{{ route('services') }}">Layanan</a>
            <a href="{{ route('about') }}">Tentang Kami</a>
        </div>

        <div>
            <h3>Kontak</h3>
            <p>Surabaya, Indonesia</p>
            <p>hello@pawcare.id</p>
            <p>+62 812 0000 0000</p>
        </div>

    </div>

    <div class="container footer-bottom">
        <p>© {{ date('Y') }} PawCare. All rights reserved.</p>
        <p>Made with ❤️ for every pet.</p>
    </div>
</footer>
