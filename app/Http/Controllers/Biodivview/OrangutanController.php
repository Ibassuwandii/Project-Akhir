<?php

namespace App\Http\Controllers\Biodivview;

use App\Http\Controllers\Controller;
use App\Services\Biodiv\OrangutanService;

class OrangutanController extends Controller
{
    protected $orangutanService;

    public function __construct(OrangutanService $Service)
    {
        $this->orangutanService = $Service;
    }

    public function index()
    {
        // Ambil data dokumen dari service
        $listOrangutan = $this->orangutanService->getAllOrangutan();

        // Tampilkan view dengan data dokumen
        return view('biodivview.orangutan.index', ['listOrangutan' => $listOrangutan]);
    }
}