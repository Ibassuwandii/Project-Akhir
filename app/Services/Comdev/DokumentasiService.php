<?php

namespace App\Services\comdev;

use App\Models\comdev\dokumentasi\Dokumentasi;

class DokumentasiService
{ public function getAllDokumentasi()
    {
        // Ambil data dokumentasi dan komentar terkait
        return Dokumentasi::with('comment')->get();
    }
}