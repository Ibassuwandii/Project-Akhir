<?php

namespace App\Http\Controllers\Edukasiview;

use App\Http\Controllers\Controller;
use App\Services\edukasi\TamanbacaService;

class TamanbacaController extends Controller
{
    protected $tamanbacaService;

    public function __construct(TamanbacaService $tamanbacaService)
    {
        $this->tamanbacaService = $tamanbacaService;
    }

    public function index()
    {
        // Ambil data dokumen dari service
        $listTamanbaca = $this->tamanbacaService->getAllTamanbaca();

        // Tampilkan view dengan data dokumen
        return view('edukasiview.tamanbaca.index', ['listTamanbaca' => $listTamanbaca]);

    }
}
