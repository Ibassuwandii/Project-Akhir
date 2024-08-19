<?php

namespace App\Http\Controllers\Biodivview;

use App\Http\Controllers\Controller;
use App\Services\Biodiv\SurveiService;

class SurveiController extends Controller
{
    protected $surveiService;

    public function __construct(SurveiService $surveiService)
    {
        $this->surveiService = $surveiService;
    }

    public function index()
    {
        // Ambil data dokumen dari service
        $listSurvei = $this->surveiService->getAllSurvei();

        // Tampilkan view dengan data dokumen
        return view('biodivview.survei.index', ['listSurvei' => $listSurvei]);
    }
}