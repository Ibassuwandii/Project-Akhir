<?php

namespace App\Http\Controllers\Edukasiview;

use App\Http\Controllers\Controller;
use App\Services\edukasi\InstagramService;

class InstagramController extends Controller
{
    protected $instagramService;

    public function __construct(InstagramService $instagramService)
    {
        $this->instagramService = $instagramService;
    }

    public function index()
    {
        // Ambil data dokumen dari service
        $listInstagram = $this->instagramService->getAllInstagram();

        // Tampilkan view dengan data dokumen
        return view('edukasiview.instagram.index', ['listInstagram' => $listInstagram]);

    }
}
