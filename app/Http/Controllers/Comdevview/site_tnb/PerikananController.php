<?php

namespace App\Http\Controllers\Comdevview\site_tnb;

use App\Http\Controllers\Controller;
use App\Services\Comdev\site_tnb\PerikananService;

class PerikananController extends Controller
{
    protected $perikananservice;

    public function __construct(PerikananService $perikananservice)
    {
        $this->perikananservice = $perikananservice;
    }

    public function index()
    {
        // Ambil data peta dari service
        $listPerikanan = $this->perikananservice->getAllperikanan();

        // Tampilkan view dengan data peta
        return view('comdevview.site_tnb.perikanan.index', ['listPerikanan' => $listPerikanan]);
    }

}
