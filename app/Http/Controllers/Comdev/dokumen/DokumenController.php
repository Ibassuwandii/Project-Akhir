<?php

namespace App\Http\Controllers\Comdev\Dokumen;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $list_dokumen = Dokumen::all()->map(function($dokumen) {
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
            'file_pdf' => 'required|file|mimes:pdf,jpg|max:5048',
            'tanggal' => 'required|date',
        ], [
            'judul_dokumen.required' => 'Field Judul Dokumen wajib diisi.',
            'file_pdf.required' => 'Field File PDF wajib diisi.',
            'file_pdf.file' => 'File harus berupa file.',
            'file_pdf.mimes' => 'File harus berupa file dengan format pdf atau jpg.',
            'file_pdf.max' => 'Ukuran file tidak boleh lebih dari 2048 KB.',
            'tanggal.required' => 'Field Tanggal wajib diisi.',
            'tanggal.date' => 'Field Tanggal harus berupa tanggal yang valid.',
        ]);

        $dokumen = new Dokumen;
        $dokumen->judul_dokumen = $request->judul_dokumen;
        $dokumen->tanggal = $request->tanggal;
        $dokumen->handleUploadPdf();
        $dokumen->save();

        return redirect('comdev/dokumen')->with('create', 'Data dokumen berhasil disimpan.');
    }

    public function edit($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return view('comdev.dokumen.edit', compact('dokumen'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_dokumen' => 'required',
            'file_pdf' => 'nullable|file|mimes:pdf,jpg|max:5048',
            'tanggal' => 'required|date',
        ], [
            'judul_dokumen.required' => 'Field Judul Dokumen wajib diisi.',
            'file_pdf.file' => 'File harus berupa file.',
            'file_pdf.mimes' => 'File harus berupa file dengan format pdf atau jpg.',
            'file_pdf.max' => 'Ukuran file tidak boleh lebih dari 2048 KB.',
            'tanggal.required' => 'Field Tanggal wajib diisi.',
            'tanggal.date' => 'Field Tanggal harus berupa tanggal yang valid.',
        ]);

        $dokumen = Dokumen::findOrFail($id);
        $dokumen->judul_dokumen = $request->judul_dokumen;
        $dokumen->tanggal = $request->tanggal;

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
