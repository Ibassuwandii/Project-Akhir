<?php

namespace App\Services\biodiv;

use App\Models\biodiv\antropogenik\Antropogenik; // Pastikan Anda mengimport model Dokumen

class AntropogenikService
{
    public function getAllAntropogenik()
    {
        // Mengambil semua dokumen dari tabel 'dokumens' menggunakan Eloquent
        return Antropogenik::all();
    }
}