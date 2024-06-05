<?php

namespace App\Http\Controllers\Comdevview\site_pgsb;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_pgsb\Tpom;
use App\Services\Comdev\site_pgsb\TpomService;

class TpomController extends Controller
{
    protected $tpomservice;

    public function __construct(Tpomservice $tpomservice)
    {
        $this->tpomservice = $tpomservice;
    }

    public function index()
    {
        // Ambil data peta dari service
        $listTpom = $this->tpomservice->getAllTpom();

        // Tampilkan view dengan data peta
        return view('comdevview.site_pgsb.index', ['listTpom' => $listTpom]);
    }

}
