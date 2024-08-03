<?php

namespace App\Services\edukasi;

use App\Models\edukasi\visitschool\Visitschool; // Pastikan Anda mengimport model Dokumen

class VisitschoolService
{
    public function getAllVisitschool()
    {
        // Mengambil semua dokumen dari tabel 'dokumens' menggunakan Eloquent
        return Visitschool::all();
    }
}
