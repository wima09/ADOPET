
@extends('layouts.app')

@section('title', 'Adopsi Hewan')

@section('content')

<section class="page-banner">
    <div class="container">
        <span class="eyebrow">ADOPTION CENTER</span>
        <h1>Temukan Sahabat Barumu 🐾</h1>
        <p>Berikan rumah dan kehidupan baru bagi mereka.</p>
    </div>
</section>

<section class="section">
    <div class="container">

        <form action="{{ route('adoption') }}" method="GET"
            class="search-panel">

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari nama atau ras hewan...">

            <select name="category">
                <option value="">Semua Kategori</option>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        @selected(request('category') == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <select name="gender">
                <option value="">Semua Jenis Kelamin</option>
                <option value="jantan" @selected(request('gender') === 'jantan')>
                    Jantan
                </option>
                <option value="betina" @selected(request('gender') === 'betina')>
                    Betina
                </option>
            </select>

            <button class="btn-primary" type="submit">
                Cari Hewan
            </button>

        </form>

        <div class="section-heading">
            <div>
                <h2>Hewan Tersedia untuk Adopsi</h2>
                <p>Temukan sahabat yang cocok dengan keluargamu.</p>
            </div>
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
                            <span>{{ $pet->age_months }} bulan</span>
                            <span>{{ ucfirst($pet->gender) }}</span>
                        </div>

                        <a href="{{ route('pet.detail', $pet) }}"
                            class="btn-card">
                            Lihat Detail →
                        </a>

                    </div>

                </div>

            @empty

                <div class="empty-state">
                    <h3>Hewan tidak ditemukan 🐾</h3>
                    <p>Coba gunakan kata kunci pencarian lainnya.</p>
                    <a href="{{ route('adoption') }}" class="btn-primary">
                        Reset Filter
                    </a>
                </div>

            @endforelse

        </div>

        <div class="pagination">
            {{ $pets->links() }}
        </div>

    </div>
</section>

@endsection
