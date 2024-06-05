<?php

namespace App\Http\Controllers\Comdevview\site_sk;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Karhutla;
use App\Services\Comdev\site_sk\KarhutlaService;

class KarhutlaController extends Controller
{
    protected $karhutlaservice;

    public function __construct(Karhutlaservice $karhutlaservice)
    {
        $this->karhutlaservice = $karhutlaservice;
    }

    public function index()
    {
        // Ambil data peta dari service
        $listKarhutla = $this->karhutlaservice->getAllKarhutla();

        // Tampilkan view dengan data peta
        return view('comdevview.site_sk.karhutla.index', ['listKarhutla' => $listKarhutla]);
    }

}
