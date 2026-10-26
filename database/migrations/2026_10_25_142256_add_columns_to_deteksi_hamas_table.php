<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::table('deteksi_hamas', function (Blueprint $table) {
        $table->string('lokasi');
        $table->string('nama_tanaman');
        $table->string('jenis_hama');
        $table->unsignedTinyInteger('confidence_score');
        $table->float('tingkat_kerusakan');
        $table->string('status_deteksi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('deteksi_hamas', function (Blueprint $table) {
        $table->dropColumn([
            'lokasi',
            'nama_tanaman',
            'jenis_hama',
            'confidence_score',
            'tingkat_kerusakan',
            'status_deteksi',
        ]);
    });
}
};