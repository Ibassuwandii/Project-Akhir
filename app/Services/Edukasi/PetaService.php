<?php

namespace App\Services\Comdev;

use App\Models\Comdev\peta\Peta; // Pastikan Anda mengimport model Peta

class PetaService
{
    public function getAllPeta()
    {
        // Mengambil semua peta dari tabel 'petas' menggunakan Eloquent
        return Peta::all();
    }
}
