
@extends('layouts.app')

@section('title', 'Tentang PawCare')

@section('content')

<section class="page-banner">
    <div class="container">
        <span class="eyebrow">ABOUT US</span>
        <h1>Mengenal PawCare</h1>
        <p>Bersama menciptakan kehidupan lebih baik bagi hewan.</p>
    </div>
</section>

<section class="section">
    <div class="container about-grid">

        <img
            class="about-photo"
            src="https://images.unsplash.com/photo-1450778869180-41d0601e046e?w=1000"
            alt="Hewan peliharaan">

        <div>
            <span class="eyebrow">OUR STORY</span>
            <h2>Setiap Hewan Berhak Mendapatkan Kasih Sayang.</h2>

            <p>
                PawCare adalah sistem layanan adopsi dan perawatan
                hewan peliharaan yang menghubungkan calon adopter,
                shelter, dan tenaga profesional perawatan hewan.
            </p>

            <p>
                Kami ingin mempermudah masyarakat menemukan
                sahabat baru sekaligus memastikan hewan
                mendapatkan perawatan yang layak.
            </p>

            <a href="{{ route('adoption') }}" class="btn-primary">
                Mulai Adopsi →
            </a>
        </div>

    </div>
</section>

@endsection
