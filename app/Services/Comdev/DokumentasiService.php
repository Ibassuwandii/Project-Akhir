<?php

namespace App\Services\comdev;

use App\Models\comdev\dokumentasi\Dokumentasi;

class DokumentasiService
{
    public function getAllDokumentasi()
    {

        return Dokumentasi::all();
    }
}
