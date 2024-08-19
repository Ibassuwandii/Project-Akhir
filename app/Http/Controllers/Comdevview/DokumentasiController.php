<?php

namespace App\Http\Controllers\Comdevview;

use App\Http\Controllers\Controller;
use App\Services\Comdev\DokumentasiService;
use App\Models\Comment;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    protected $dokumentasiService;

    public function __construct(DokumentasiService $dokumentasiService)
    {
        $this->dokumentasiService = $dokumentasiService;
    }

    public function index()
    {
        // Ambil data dokumentasi dan komentar terkait dari service, urutkan berdasarkan tanggal terbaru
        $listDokumentasi = $this->dokumentasiService->getAllDokumentasi()->sortByDesc('tanggal');

        return view('comdevview.dokumentasi.index', ['listDokumentasi' => $listDokumentasi]);
    }

    public function storeComment(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        $comment = new Comment();
        $comment->dokumentasi_id = $id;
        $comment->comment = $request->comment;
        $comment->save();

        return back()->with('success', 'Komentar berhasil ditambahkan.');
    }
}