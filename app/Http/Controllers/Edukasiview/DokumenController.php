<?php

namespace App\Http\Controllers\Edukasiview;

use App\Http\Controllers\Controller;
use App\Services\edukasi\DokumenService;

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
        return view('edukasiview.dokumen.index', ['listDokumen' => $listDokumen]);
    }
}
