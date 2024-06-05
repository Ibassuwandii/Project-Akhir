<?php

namespace App\Http\Controllers\Comdevview;

use App\Http\Controllers\Controller;
use App\Services\Comdev\DokumenService;

class DokumenController extends Controller
{
    protected $dokumenService;

    public function __construct(DokumenService $dokumenService)
    {
        $this->dokumenService = $dokumenService;
    }

    public function index()
    {
        // Ambil data dokumen dari service
        $listDokumen = $this->dokumenService->getAllDokumen();

        // Tampilkan view dengan data dokumen
        return view('comdevview.dokumen.index', ['listDokumen' => $listDokumen]);
    }
}
