<?php

namespace App\Services\edukasi;

use App\Models\edukasi\aksisampah\Aksisampah; // Pastikan Anda mengimport model Dokumen

class AksisampahService
{
    public function getAllAksisampah()
    {
        // Mengambil semua dokumen dari tabel 'dokumens' menggunakan Eloquent
        return Aksisampah::all();
    }
}
