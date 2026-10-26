@extends('layouts.main')

@section('title', 'Dashboard | AgriVision')

@section('content')
<section class="hero">
    <div class="hero-text">
        <span class="eyebrow">SISTEM PERTANIAN CERDAS</span>
        <h1>Selamat Datang di AgriVision Garut</h1>
        <p>
            Sistem Deteksi Hama Tanaman Berbasis Computer Vision
            untuk membantu kelompok tani memantau serangan hama
            dan menentukan langkah penanganan yang tepat.
        </p>

        <div class="hero-actions">
            <a class="btn btn-primary" href="{{ route('deteksi') }}">
                + Input Deteksi
            </a>
            <a class="btn btn-light" href="{{ route('riwayat') }}">
                Lihat Riwayat
            </a>
        </div>
    </div>

    <div class="hero-visual">
        <div class="plant-emoji">🌾</div>
        <h3>Pantau. Deteksi. Tangani.</h3>
        <p>Mendukung pertanian yang lebih terpantau di Kabupaten Garut.</p>
    </div>
</section>

<section class="section-heading">
    <span class="eyebrow">FITUR UTAMA</span>
    <h2>Pengelolaan Deteksi Hama</h2>
    <p>Catat hasil simulasi prediksi dan pantau riwayat deteksi tanaman.</p>
</section>

<div class="feature-grid">
    <a class="feature-card" href="{{ route('deteksi') }}">
        <span class="feature-icon">🔎</span>
        <h3>Input Deteksi</h3>
        <p>Masukkan lokasi, tanaman, jenis hama, dan hasil prediksi.</p>
        <span class="feature-link">Mulai deteksi →</span>
    </a>

    <a class="feature-card" href="{{ route('tentang') }}">
        <span class="feature-icon">🌿</span>
        <h3>Tentang Sistem</h3>
        <p>Kenali tujuan dan teknologi yang digunakan AgriVision.</p>
        <span class="feature-link">Pelajari sistem →</span>
    </a>

    <a class="feature-card" href="{{ route('riwayat') }}">
        <span class="feature-icon">📋</span>
        <h3>Riwayat Deteksi</h3>
        <p>Lihat data deteksi hama yang telah tersimpan.</p>
        <span class="feature-link">Lihat riwayat →</span>
    </a>
</div>
@endsection
