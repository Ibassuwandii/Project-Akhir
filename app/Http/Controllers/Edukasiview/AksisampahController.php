<?php

namespace App\Http\Controllers\Edukasiview;

use App\Http\Controllers\Controller;
use App\Services\edukasi\AksisampahService;

class AksisampahController extends Controller
{
    protected $aksisampahService;

    public function __construct(AksisampahService $aksisampahService)
    {
        $this->aksisampahService = $aksisampahService;
    }

    public function index()
    {
        // Ambil data dokumen dari service
        $listAksisampah = $this->aksisampahService->getAllAksisampah();

        // Tampilkan view dengan data dokumen
        return view('edukasiview.aksisampah.index', ['listAksisampah' => $listAksisampah]);

    }
}
