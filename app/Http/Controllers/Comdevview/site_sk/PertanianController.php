<?php

namespace App\Http\Controllers\Comdevview\site_sk;

use App\Http\Controllers\Controller;
use App\Services\Comdev\site_sk\PertanianService;

class PertanianController extends Controller
{
    protected $pertanianservice;

    public function __construct(PertanianService $pertanianservice)
    {
        $this->pertanianservice = $pertanianservice;
    }

    public function index()
    {
        // Ambil data peta dari service
        $listPertanian = $this->pertanianservice->getAllPertanian();

        // Tampilkan view dengan data peta
        return view('comdevview.site_sk.pertanian.index', ['listPertanian' => $listPertanian]);
    }

}
