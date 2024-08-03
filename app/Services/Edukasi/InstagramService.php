<?php

namespace App\Services\edukasi;

use App\Models\edukasi\instagram\Instagram; // Pastikan Anda mengimport model Dokumen

class InstagramService
{
    public function getAllInstagram()
    {
        // Mengambil semua dokumen dari tabel 'dokumens' menggunakan Eloquent
        return Instagram::all();
    }
}
