@extends('layouts.main')

@section('title', 'Hasil Deteksi | AgriVision')

@section('content')
<section class="page-heading">
    <span class="eyebrow">HASIL ANALISIS</span>
    <h1>Hasil Deteksi Hama</h1>
    <p>Data simulasi telah diproses dan disimpan ke database.</p>
</section>

<div class="content-card">
    <div class="result-header">
        <div>
            <span class="muted">Status Deteksi</span>
            <h2>
                @if ($deteksi->confidence_score < 50)
                    <span class="status status-red">Tidak Pasti</span>
                @elseif ($deteksi->confidence_score <= 80)
                    <span class="status status-yellow">Indikasi Hama</span>
                @else
                    <span class="status status-green">Hama Terkonfirmasi</span>
                @endif
            </h2>
        </div>
        <div class="score-box">
            <strong>{{ $deteksi->confidence_score }}%</strong>
            <span>Confidence Score</span>
        </div>
    </div>

    <div class="table-wrap">
        <table>
            <tbody>
                <tr><th>Lokasi Lahan</th><td>{{ $deteksi->lokasi }}</td></tr>
                <tr><th>Nama Tanaman</th><td>{{ $deteksi->nama_tanaman }}</td></tr>
                <tr><th>Jenis Hama</th><td>{{ $deteksi->jenis_hama }}</td></tr>
                <tr><th>Confidence Score</th><td>{{ $deteksi->confidence_score }}%</td></tr>
                <tr><th>Tingkat Kerusakan Daun</th><td>{{ $deteksi->tingkat_kerusakan }}%</td></tr>
                <tr><th>Status Deteksi</th><td>{{ $deteksi->status_deteksi }}</td></tr>
                <tr><th>Waktu Pencatatan</th><td>{{ $deteksi->created_at->format('d-m-Y H:i') }}</td></tr>
            </tbody>
        </table>
    </div>

    <div class="recommendation">
        <h3>Rekomendasi Penanganan</h3>
        <p>{{ $rekomendasi }}</p>
    </div>

    <div class="hero-actions">
        <a href="{{ route('deteksi') }}" class="btn btn-primary">Input Deteksi Baru</a>
        <a href="{{ route('riwayat') }}" class="btn btn-light">Lihat Riwayat</a>
    </div>
</div>
@endsection
