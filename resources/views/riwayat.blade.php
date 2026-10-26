@extends('layouts.main')

@section('title', 'Riwayat Deteksi | AgriVision')

@section('content')
<section class="page-heading">
    <span class="eyebrow">DATA TERSIMPAN</span>
    <h1>Riwayat Deteksi Hama</h1>
    <p>Daftar hasil deteksi yang tersimpan di database AgriVision.</p>
</section>

<div class="content-card">
    <div class="history-heading">
        <h2>Data Deteksi</h2>
        <a href="{{ route('deteksi') }}" class="btn btn-primary">
            + Input Deteksi
        </a>
    </div>

    <p class="muted">Total data: {{ $riwayat->count() }} deteksi</p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th>Tanaman</th>
                    <th>Jenis Hama</th>
                    <th>Confidence</th>
                    <th>Kerusakan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($riwayat as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->nama_tanaman }}</td>
                        <td>{{ $item->jenis_hama }}</td>
                        <td>{{ $item->confidence_score }}%</td>
                        <td>{{ $item->tingkat_kerusakan }}%</td>
                        <td>
                            @if ($item->confidence_score < 50)
                                <span class="status status-red">Tidak Pasti</span>
                            @elseif ($item->confidence_score <= 80)
                                <span class="status status-yellow">Indikasi Hama</span>
                            @else
                                <span class="status status-green">Terkonfirmasi</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="empty-state">
                            Belum ada data deteksi. Silakan input data terlebih dahulu.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
