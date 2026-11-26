@extends('layouts.app')

@section('title', 'Registrasi')

@section('content')

<section class="auth-section">
    <div class="auth-card">

        <div class="auth-logo">🐾</div>

        <h1>Bergabung dengan PawCare</h1>
        <p>Buat akun dan mulai perjalananmu bersama PawCare.</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label>Nama Lengkap</label>
            <input type="text" name="name"
                value="{{ old('name') }}"
                placeholder="Nama lengkap"
                required>

            <label>Email</label>
            <input type="email" name="email"
                value="{{ old('email') }}"
                placeholder="Email aktif"
                required>

            <label>Password</label>
            <input type="password" name="password"
                placeholder="Minimal 8 karakter"
                required>

            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation"
                placeholder="Ulangi password"
                required>

            <button type="submit" class="btn-primary full-button">
                Buat Akun
            </button>
        </form>

        <p class="auth-switch">
            Sudah memiliki akun?
            <a href="{{ route('login') }}">Masuk</a>
        </p>

    </div>
</section>

@endsection
