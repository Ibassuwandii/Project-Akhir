<?php

namespace App\Http\Controllers\Edukasiview;

use App\Http\Controllers\Controller;
use App\Services\edukasi\DokumentasiService;

class DokumentasiController extends Controller
{
    protected $dokumentasiService;

    public function __construct(DokumentasiService $dokumentasiService)
    {
        $this->dokumentasiService = $dokumentasiService;
    }

    public function index()
    {
        // Ambil data dokumen dari service
        $listDokumentasi = $this->dokumentasiService->getAllDokumentasi();


        return view('Edukasiview.dokumentasi.index', ['listDokumentasi' => $listDokumentasi]);
    }
}
