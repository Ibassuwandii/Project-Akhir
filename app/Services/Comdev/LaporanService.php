<?php

namespace App\Services\comdev;

use App\Models\comdev\laporan\Laporan; // Pastikan Anda mengimport model Dokumen

class LaporanService
{
    public function getAllLaporan()
    {
        // Mengambil semua laporan dari tabel 'dokumens' menggunakan Eloquent
        return Laporan::all();
    }
}
