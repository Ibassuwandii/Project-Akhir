<?php

namespace App\Http\Controllers\Edukasiview;

use App\Http\Controllers\Controller;
use App\Services\edukasi\PetaService;

class PetaController extends Controller
{
    protected $petaService;

    public function __construct(PetaService $petaService)
    {
        $this->petaService = $petaService;
    }

    public function index()
    {
        // Ambil data peta dari service
        $listPeta = $this->petaService->getAllPeta();

        // Tampilkan view dengan data peta
        return view('Edukasiview.peta.index', ['listPeta' => $listPeta]);
    }
}
