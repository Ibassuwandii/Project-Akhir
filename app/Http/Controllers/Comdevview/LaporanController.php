<?php

namespace App\Http\Controllers\Comdevview;

use App\Http\Controllers\Controller;
use App\Services\Comdev\LaporanService;

class LaporanController extends Controller
{
    protected $laporanService;

    public function __construct(LaporanService $laporanService)
    {
        $this->laporanService = $laporanService;
    }

    public function index()
    {
        // Ambil data laporan dari service
        $listLaporan = $this->laporanService->getAllLaporan();

        // Tampilkan view dengan data Laporan
        return view('comdevview.laporan.index', ['listLaporan' => $listLaporan]);
    }
}
