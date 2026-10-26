@extends('layouts.main')

@section('title', 'Tentang | AgriVision')

@section('content')
<section class="page-heading">
    <span class="eyebrow">TENTANG APLIKASI</span>
    <h1>Mengenal AgriVision Garut</h1>
    <p>Sistem pencatatan hasil simulasi deteksi hama tanaman.</p>
</section>

<div class="content-card">
    <h2>Tujuan Pengembangan</h2>
    <p>
        AgriVision Garut dikembangkan untuk membantu Kelompok Tani
        Makmur mencatat hasil deteksi hama, memantau tingkat kerusakan
        daun, serta mendokumentasikan riwayat serangan hama secara teratur.
    </p>

    <h2>Lokasi Deteksi</h2>
    <div class="tag-list">
        <span>Garut Kota</span>
        <span>Tarogong Kaler</span>
        <span>Samarang</span>
    </div>

    <h2>Parameter yang Dicatat</h2>
    <ul class="detail-list">
        <li>Nama tanaman yang diperiksa.</li>
        <li>Jenis hama hasil prediksi.</li>
        <li>Confidence score dalam persentase.</li>
        <li>Tingkat kerusakan daun dalam persentase.</li>
        <li>Status deteksi dan rekomendasi penanganan.</li>
    </ul>

    <h2>Teknologi Computer Vision</h2>
    <p>
        Sistem ini menggunakan hasil simulasi klasifikasi citra dengan
        model EfficientNet-B0. Pada prototipe ini, operator memasukkan
        jenis hama dan confidence score secara manual tanpa koneksi
        langsung ke model klasifikasi.
    </p>
</div>
@endsection
