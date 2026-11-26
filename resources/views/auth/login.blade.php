
@extends('layouts.app')

@section('title', 'Login')

@section('content')

<section class="auth-section">
    <div class="auth-card">

        <div class="auth-logo">🐾</div>

        <h1>Selamat Datang!</h1>
        <p>Masuk ke akun PawCare kamu.</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label>Email</label>
            <input type="email" name="email"
                value="{{ old('email') }}"
                placeholder="Masukkan email"
                required>

            <label>Password</label>
            <input type="password" name="password"
                placeholder="Masukkan password"
                required>

            <button type="submit" class="btn-primary full-button">
                Masuk
            </button>
        </form>

        <p class="auth-switch">
            Belum punya akun?
            <a href="{{ route('register') }}">Daftar sekarang</a>
        </p>

    </div>
</section>

@endsection
