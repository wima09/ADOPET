
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<section class="hero">
    <div class="container hero-grid">

        <div>
            <span class="eyebrow">🐾 WELCOME TO PAWCARE</span>

            <h1>
                Berikan Mereka
                <span>Rumah Penuh Cinta.</span>
            </h1>

            <p>
                Temukan sahabat terbaikmu melalui layanan
                adopsi dan perawatan hewan peliharaan PawCare.
                Karena setiap hewan pantas mendapatkan kasih sayang.
            </p>

            <div class="hero-actions">
                <a href="{{ route('adoption') }}" class="btn-primary">
                    Temukan Sahabat →
                </a>

                <a href="{{ route('about') }}" class="btn-outline">
                    Tentang Kami
                </a>
            </div>

            <div class="hero-stats">
                <div>
                    <h2>150+</h2>
                    <p>Hewan Diadopsi</p>
                </div>

                <div>
                    <h2>50+</h2>
                    <p>Hewan Tersedia</p>
                </div>

                <div>
                    <h2>100+</h2>
                    <p>Keluarga Bahagia</p>
                </div>
            </div>
        </div>

        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?w=1000"
                alt="Anjing peliharaan">

            <div class="floating-card">
                <span>💚</span>
                <div>
                    <strong>Adopsi, Jangan Membeli</strong>
                    <p>Berikan kesempatan hidup baru.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section">
    <div class="container">

        <div class="section-heading">
            <div>
                <span class="eyebrow">ADOPTION CENTER</span>
                <h2>Temukan Sahabat Baru</h2>
                <p>Hewan-hewan lucu sedang menunggu keluarga baru.</p>
            </div>

            <a href="{{ route('adoption') }}" class="btn-outline">
                Lihat Semua →
            </a>
        </div>

        <div class="pet-grid">

            @forelse($pets as $pet)

                <div class="pet-card">

                    <div class="pet-image">
                        <img
                            src="{{ $pet->image ?: 'https://placehold.co/600x400?text=PawCare' }}"
                            alt="{{ $pet->name }}">

                        <span class="pet-badge">Tersedia</span>
                    </div>

                    <div class="pet-info">
                        <h3>{{ $pet->name }}</h3>

                        <p>
                            {{ $pet->breed ?: 'Campuran' }}
                            ·
                            {{ $pet->category->name ?? 'Hewan' }}
                        </p>

                        <div class="pet-meta">
                            <span>
                                {{ $pet->age_months }} bulan
                            </span>

                            <span>
                                {{ $pet->shelter->name ?? 'PawCare Shelter' }}
                            </span>
                        </div>

                        <a href="{{ route('pet.detail', $pet) }}"
                            class="btn-card">
                            Lihat Detail →
                        </a>
                    </div>

                </div>

            @empty

                <div class="empty-state">
                    <h3>Belum ada hewan tersedia</h3>
                    <p>Silakan kunjungi kembali nanti.</p>
                </div>

            @endforelse

        </div>

    </div>
</section>

<section class="section service-section">
    <div class="container">

        <div class="section-heading center-heading">
            <div>
                <span class="eyebrow">OUR SERVICES</span>
                <h2>Perawatan Terbaik untuk Hewanmu</h2>
                <p>Jaga kesehatan dan kebahagiaan sahabat kesayanganmu.</p>
            </div>
        </div>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">✂️</div>
                <h3>Grooming</h3>
                <p>Perawatan bulu dan kebersihan hewan.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">💉</div>
                <h3>Vaksinasi</h3>
                <p>Menjaga kesehatan melalui vaksinasi.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🩺</div>
                <h3>Konsultasi</h3>
                <p>Konsultasi dengan dokter hewan.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🐾</div>
                <h3>Pemeriksaan</h3>
                <p>Pemeriksaan kesehatan secara berkala.</p>
            </div>

        </div>

        <div class="center-button">
            <a href="{{ route('services') }}" class="btn-primary">
                Semua Layanan →
            </a>
        </div>

    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Satu Adopsi Bisa Mengubah Sebuah Kehidupan.</h2>
        <p>Bergabunglah dengan komunitas pecinta hewan PawCare.</p>
        <a href="{{ route('register') }}" class="btn-white">
            Bergabung Sekarang →
        </a>
    </div>
</section>

@endsection
