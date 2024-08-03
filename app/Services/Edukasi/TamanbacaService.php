<?php

namespace App\Services\edukasi;

use App\Models\edukasi\tamanbaca\Tamanbaca; // Pastikan Anda mengimport model Dokumen

class TamanbacaService
{
    public function getAllTamanbaca()
    {
        // Mengambil semua dokumen dari tabel 'dokumens' menggunakan Eloquent
        return Tamanbaca::all();
    }
}
