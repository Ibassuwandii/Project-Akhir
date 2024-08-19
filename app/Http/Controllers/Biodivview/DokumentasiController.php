<?php

namespace App\Http\Controllers\Biodivview;

use App\Http\Controllers\Controller;
use App\Services\biodiv\DokumentasiService;

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


        return view('biodivview.dokumentasi.index', ['listDokumentasi' => $listDokumentasi]);
    }
}