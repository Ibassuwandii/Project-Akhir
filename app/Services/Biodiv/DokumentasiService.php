<?php

namespace App\Services\biodiv;

use App\Models\biodiv\dokumentasi\Dokumentasi;

class DokumentasiService
{
    public function getAllDokumentasi()
    {

        return Dokumentasi::all();
    }
}