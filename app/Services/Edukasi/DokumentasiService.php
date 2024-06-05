<?php

namespace App\Services\edukasi;

use App\Models\edukasi\dokumentasi\Dokumentasi;

class DokumentasiService
{
    public function getAllDokumentasi()
    {

        return Dokumentasi::all();
    }
}
