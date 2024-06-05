<?php

namespace App\Http\Controllers\Comdevview\site_sk;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Bangusman;
use App\Services\Comdev\site_sk\BangusmanService;

class BangusmanController extends Controller
{
    protected $bangusmanservice;

    public function __construct(BangusmanService $bangusmanservice)
    {
        $this->bangusmanservice = $bangusmanservice;
    }

    public function index()
    {
        // Ambil data peta dari service
        $listBangusman = $this->bangusmanservice->getAllBangusman();

        // Tampilkan view dengan data peta
        return view('comdevview.site_sk.bangusman.index', ['listBangusman' => $listBangusman]);
    }

}
