<?php

namespace App\Services\biodiv;

use App\Models\biodiv\survei\Survei; // Pastikan Anda mengimport model Dokumen

class SurveiService
{
    public function getAllSurvei()
    {
        // Mengambil semua dokumen dari tabel 'dokumens' menggunakan Eloquent
        return Survei::all();
    }
}