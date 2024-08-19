<?php

namespace App\Services\biodiv;

use App\Models\biodiv\orangutan\Orangutan; // Pastikan Anda mengimport model Dokumen

class OrangutanService
{
    public function getAllOrangutan()
    {
        // Mengambil semua dokumen dari tabel 'dokumens' menggunakan Eloquent
        return Orangutan::all();
    }
}