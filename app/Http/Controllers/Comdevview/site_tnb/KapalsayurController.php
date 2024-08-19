<?php

namespace App\Http\Controllers\Comdevview\site_tnb;

use App\Http\Controllers\Controller;
use App\Services\Comdev\site_tnb\KapalsayurService;

class KapalsayurController extends Controller
{
    protected $kapalsayurservice;

    public function __construct(KapalsayurService $kapalsayurservice)
    {
        $this->kapalsayurservice = $kapalsayurservice;
    }

    public function index()
    {
        // Ambil data peta dari service
        $listKapalsayur = $this->kapalsayurservice->getAllKapalsayur();

        // Tampilkan view dengan data peta
        return view('comdevview.site_tnb.Kapalsayur.index', ['listKapalsayur' => $listKapalsayur]);
    }

}