
@extends('layouts.app')

@section('title', $pet->name)

@section('content')

<section class="section">
    <div class="container">

        <a href="{{ route('adoption') }}" class="back-link">
            ← Kembali ke Katalog
        </a>

        <div class="detail-grid">

            <div class="detail-image">
                <img
                    src="{{ $pet->image ?: 'https://placehold.co/800x700?text=PawCare' }}"
                    alt="{{ $pet->name }}">
            </div>

            <div class="detail-info">

                <span class="pet-badge detail-badge">
                    {{ ucfirst(str_replace('_', ' ', $pet->status)) }}
                </span>

                <h1>{{ $pet->name }}</h1>

                <p>
                    {{ $pet->breed ?: 'Campuran' }}
                    ·
                    {{ $pet->category->name ?? 'Hewan' }}
                </p>

                <div class="detail-meta">
                    <div>
                        <span>Usia</span>
                        <strong>{{ $pet->age_months }} bulan</strong>
                    </div>

                    <div>
                        <span>Jenis Kelamin</span>
                        <strong>{{ ucfirst($pet->gender) }}</strong>
                    </div>

                    <div>
                        <span>Kesehatan</span>
                        <strong>{{ $pet->health_status }}</strong>
                    </div>

                    <div>
                        <span>Shelter</span>
                        <strong>{{ $pet->shelter->name ?? 'PawCare' }}</strong>
                    </div>
                </div>

                <h3>Tentang {{ $pet->name }}</h3>

                <p>{{ $pet->description ?: 'Belum ada deskripsi.' }}</p>

                <div class="notice-box">
                    💚 Pastikan kamu memiliki komitmen
                    dan kesiapan untuk merawat hewan sebelum
                    mengajukan adopsi.
                </div>

                @if($pet->status === 'tersedia')
                    <a href="{{ route('login') }}" class="btn-primary full-button">
                        Login untuk Mengajukan Adopsi →
                    </a>
                @else
                    <button class="btn-outline full-button" disabled>
                        Hewan Tidak Tersedia
                    </button>
                @endif

            </div>

        </div>

    </div>
</section>

@endsection
