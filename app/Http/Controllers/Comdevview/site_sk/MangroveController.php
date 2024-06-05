<?php

namespace App\Http\Controllers\Comdevview\site_sk;

use App\Http\Controllers\Controller;
use App\Services\Comdev\site_sk\MangroveService;

class MangroveController extends Controller
{
    protected $mangroveservice;

    public function __construct(Mangroveservice $mangroveservice)
    {
        $this->mangroveservice = $mangroveservice;
    }

    public function index()
    {
        // Ambil data peta dari service
        $listMangrove = $this->mangroveservice->getAllMangrove();

        // Tampilkan view dengan data peta
        return view('comdevview.site_sk.mangrove.index', ['listMangrove' => $listMangrove]);
    }

}
