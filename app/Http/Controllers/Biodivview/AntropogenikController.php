<?php

namespace App\Http\Controllers\Biodivview;

use App\Http\Controllers\Controller;
use App\Services\Biodiv\AntropogenikService;

class AntropogenikController extends Controller
{
    protected $antropogenikService;

    public function __construct(AntropogenikService $antropogenikService)
    {
        $this->antropogenikService = $antropogenikService;
    }

    public function index()
    {
        // Ambil data dokumen dari service
        $listAntropogenik = $this->antropogenikService->getAllAntropogenik();

        // Tampilkan view dengan data dokumen
        return view('biodivview.antropogenik.index', ['listAntropogenik' => $listAntropogenik]);
    }
}