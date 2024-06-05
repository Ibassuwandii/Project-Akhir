<?php

namespace App\Services\comdev;

use App\Models\comdev\dokumen\Dokumen; // Pastikan Anda mengimport model Dokumen

class DokumenService
{
    public function getAllDokumen()
    {
        // Mengambil semua dokumen dari tabel 'dokumens' menggunakan Eloquent
        return Dokumen::all();
    }
}
