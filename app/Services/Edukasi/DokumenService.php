<?php

namespace App\Services\edukasi;

use App\Models\edukasi\dokumen\Dokumen; // Pastikan Anda mengimport model Dokumen

class DokumenService
{
    public function getAllDokumen()
    {
        // Mengambil semua dokumen dari tabel 'dokumens' menggunakan Eloquent
        return Dokumen::all();
    }
}
