
@extends('layouts.app')

@section('title', 'Layanan PawCare')

@section('content')

<section class="page-banner">
    <div class="container">
        <span class="eyebrow">PAWCARE SERVICES</span>
        <h1>Layanan Perawatan Hewan</h1>
        <p>Perawatan terbaik untuk sahabat kesayanganmu.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="service-grid">

            @foreach([
                ['✂️', 'Grooming', 'Perawatan bulu, mandi, dan kebersihan hewan.'],
                ['💉', 'Vaksinasi', 'Perlindungan kesehatan melalui vaksinasi.'],
                ['🩺', 'Konsultasi', 'Konsultasi kesehatan dengan dokter hewan.'],
                ['🐾', 'Pemeriksaan', 'Pemeriksaan kesehatan hewan berkala.']
            ] as $service)

                <div class="service-card">
                    <div class="service-icon">{{ $service[0] }}</div>
                    <h3>{{ $service[1] }}</h3>
                    <p>{{ $service[2] }}</p>

                    <a href="{{ route('login') }}" class="btn-card">
                        Booking Sekarang →
                    </a>
                </div>

            @endforeach

        </div>
    </div>
</section>

@endsection
