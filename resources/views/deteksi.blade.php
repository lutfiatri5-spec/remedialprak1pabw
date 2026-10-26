@extends('layouts.main')

@section('title', 'Input Deteksi | AgriVision')

@section('content')
<section class="form-layout">
    <div class="form-intro">
        <span class="eyebrow">FORM PENCATATAN</span>
        <h1>Deteksi Hama Tanaman</h1>
        <p>
            Masukkan hasil simulasi prediksi hama untuk mencatat kondisi
            tanaman dan menentukan tindak lanjut.
        </p>
        <div class="intro-illustration">🌱 🐛</div>
        <p class="small-note">
            Hasil prediksi pada prototipe ini dimasukkan secara manual.
        </p>
    </div>

    <div class="form-card">
        <h2>Form Deteksi</h2>
        <p class="muted">Lengkapi semua informasi berikut.</p>

        @if ($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('hasil.deteksi') }}" method="POST">
            @csrf

            <div class="field">
                <label for="lokasi">Lokasi Lahan *</label>
                <select name="lokasi" id="lokasi" required>
                    <option value="">Pilih lokasi</option>
                    @foreach (['Garut Kota', 'Tarogong Kaler', 'Samarang'] as $lokasi)
                        <option value="{{ $lokasi }}" @selected(old('lokasi') === $lokasi)>
                            {{ $lokasi }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="field">
                <label for="nama_tanaman">Nama Tanaman *</label>
                <select name="nama_tanaman" id="nama_tanaman" required>
                    <option value="">Pilih tanaman</option>
                    @foreach (['Padi', 'Jagung', 'Cabai'] as $tanaman)
                        <option value="{{ $tanaman }}" @selected(old('nama_tanaman') === $tanaman)>
                            {{ $tanaman }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="field">
                <label for="jenis_hama">Jenis Hama Hasil Prediksi *</label>
                <select name="jenis_hama" id="jenis_hama" required>
                    <option value="">Pilih jenis hama</option>
                    @foreach (['Wereng Cokelat', 'Ulat Grayak', 'Kutu Daun'] as $hama)
                        <option value="{{ $hama }}" @selected(old('jenis_hama') === $hama)>
                            {{ $hama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="field">
                <label for="confidence_score">Confidence Score (%) *</label>
                <input
                    type="number"
                    name="confidence_score"
                    id="confidence_score"
                    min="0"
                    max="100"
                    step="1"
                    value="{{ old('confidence_score') }}"
                    placeholder="Contoh: 85"
                    required
                >
                <small>Masukkan nilai 0 sampai 100.</small>
            </div>

            <div class="field">
                <label for="tingkat_kerusakan">Tingkat Kerusakan Daun (%) *</label>
                <input
                    type="number"
                    name="tingkat_kerusakan"
                    id="tingkat_kerusakan"
                    min="0"
                    max="100"
                    step="0.1"
                    value="{{ old('tingkat_kerusakan') }}"
                    placeholder="Contoh: 35.5"
                    required
                >
                <small>Masukkan perkiraan kerusakan daun dari 0 sampai 100%.</small>
            </div>

            <button class="btn btn-primary btn-full" type="submit">
                Simpan dan Lihat Hasil
            </button>
        </form>
    </div>
</section>
@endsection
