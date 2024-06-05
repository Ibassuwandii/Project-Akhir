<?php

namespace App\Http\Controllers\Comdevview\site_sk;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Rangkong;
use App\Services\Comdev\site_sk\RangkongService;

class RangkongController extends Controller
{
    protected $rangkongservice;

    public function __construct(RangkongService $rangkongservice)
    {
        $this->rangkongservice = $rangkongservice;
    }

    public function index()
    {
        // Ambil data peta dari service
        $listRangkong = $this->rangkongservice->getAllRangkong();

        // Tampilkan view dengan data peta
        return view('comdevview.site_sk.rangkong.index', ['listRangkong' => $listRangkong]);
    }

}
