<?php

namespace App\Http\Controllers\Comdevview\site_pgsb;

use App\Http\Controllers\Controller;
use App\Services\Comdev\site_pgsb\MangroveService;

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
        return view('comdevview.site_pgsb.mangrove.index', ['listMangrove' => $listMangrove]);
    }

}
