<?php

namespace App\Services\biodiv;

use App\Models\biodiv\laporan\Laporan; // Pastikan Anda mengimport model Dokumen

class LaporanService
{
    public function getAllLaporan()
    {
        // Mengambil semua laporan dari tabel 'dokumens' menggunakan Eloquent
        return Laporan::all();
    }
}