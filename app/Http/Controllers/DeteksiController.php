<?php

namespace App\Http\Controllers;

use App\Models\DeteksiHama;
use Illuminate\Http\Request;

class DeteksiController extends Controller
{
    public function form()
    {
        return view('deteksi');
    }

    public function prosesData(Request $request)
    {
        $data = $request->validate([
            'lokasi' => 'required|in:Garut Kota,Tarogong Kaler,Samarang',
            'nama_tanaman' => 'required|in:Padi,Jagung,Cabai',
            'jenis_hama' => 'required|in:Wereng Cokelat,Ulat Grayak,Kutu Daun',
            'confidence_score' => 'required|integer|min:0|max:100',
            'tingkat_kerusakan' => 'required|numeric|min:0|max:100',
        ]);

        $confidence = (int) $data['confidence_score'];

        if ($confidence < 50) {
            $status = 'Tidak Pasti';
            $rekomendasi = 'Perlu verifikasi manual oleh petugas';
        } elseif ($confidence <= 80) {
            $status = 'Indikasi Hama';
            $rekomendasi = 'Lakukan pemantauan intensif';
        } else {
            $status = 'Hama Terkonfirmasi';
            $rekomendasi = 'Segera lakukan pengendalian hama';
        }

        $data['status_deteksi'] = $status;

        $deteksi = DeteksiHama::create($data);

        return view('hasil', compact('deteksi', 'rekomendasi'));
    }

    public function riwayat()
    {
        $riwayat = DeteksiHama::latest()->get();

        return view('riwayat', compact('riwayat'));
    }
}
