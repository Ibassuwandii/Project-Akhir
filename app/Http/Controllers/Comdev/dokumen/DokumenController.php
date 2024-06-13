<?php

namespace App\Http\Controllers\Comdev\Dokumen;

use carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Comdev\dokumen\Dokumen;
use App\Services\Comdev\DokumenService; // Tambahkan ini jika belum ditambahkan

class DokumenController extends Controller
{
    protected $dokumenService;

    public function __construct(DokumenService $dokumenService)
    {
        $this->dokumenService = $dokumenService;
    }

    public function index()
    {
        $list_dokumen = dokumen::all()->map(function($dokumen) {
            $dokumen->formatted_tanggal = Carbon::parse($dokumen->tanggal)->translatedFormat('d F Y');
            return $dokumen;
        });
        return view('comdev.dokumen.index', compact('list_dokumen'));
    }

    public function create()
    {
        return view('comdev.dokumen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_dokumen' => 'required',
            'file_pdf' => 'required|file|mimes:pdf,jpg|max:2048',
            'tanggal' => 'required|date',
        ]);

        $dokumen = new Dokumen;
        $dokumen->judul_dokumen = $request->judul_dokumen;
        $dokumen->tanggal = $request->tanggal;
        $dokumen->handleUploadPdf();
        $dokumen->save();

        return redirect('comdev/dokumen')->with('success', 'Data dokumen berhasil disimpan.');
    }

    public function edit($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return view('comdev.dokumen.edit', compact('dokumen'));
    }

    public function update(Request $request, $id)
    {
        $dokumen = Dokumen::findOrFail($id);
        $dokumen->judul_dokumen = $request->judul_dokumen;

        if ($request->hasFile('file_pdf')) {
            $dokumen->handleUploadPdf();
        }

        $dokumen->save();

        return redirect('comdev/dokumen')->with('update', 'Data dokumen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        $dokumen->delete();
        $dokumen->handleDeletePdf();
        return redirect('comdev/dokumen')->with('delete', 'Data dokumen berhasil dihapus.');
    }

    public function show($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return view('comdev.dokumen.show', compact('dokumen'));
    }

    public function batal()
    {
        return redirect('comdev/dokumen');
    }
}
