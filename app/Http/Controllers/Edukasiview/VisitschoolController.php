<?php

namespace App\Http\Controllers\Edukasiview;

use App\Http\Controllers\Controller;
use App\Services\edukasi\VisitschoolService;

class VisitschoolController extends Controller
{
    protected $visitschoolService;

    public function __construct(VisitschoolService $visitschoolService)
    {
        $this->visitschoolService = $visitschoolService;
    }

    public function index()
    {
        // Ambil data dokumen dari service
        $listVisitschool = $this->visitschoolService->getAllVisitschool();

        // Tampilkan view dengan data dokumen
        return view('edukasiview.visitschool.index', ['listVisitschool' => $listVisitschool]);

    }
}
