<?php

namespace App\Http\Controllers\Edukasi\Dokumen;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\edukasi\dokumen\Dokumen;

class DokumenController extends Controller
{
    public function index()
    {
        $list_dokumen = dokumen::all()->map(function($dokumen) {
            $dokumen->formatted_tanggal = Carbon::parse($dokumen->tanggal)->translatedFormat('d F Y');
            return $dokumen;
        });
        return view('edukasi.dokumen.index', compact('list_dokumen'));
    }

    public function create()
    {
        return view('edukasi.dokumen.create');
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

        return redirect('edukasi/dokumen')->with('success', 'Data dokumen berhasil disimpan.');
    }

    public function edit($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return view('edukasi.dokumen.edit', compact('dokumen'));
    }

    public function update(Request $request, $id)
    {
        $dokumen = Dokumen::findOrFail($id);
        $dokumen->judul_dokumen = $request->judul_dokumen;

        if(request('file_pdf')) $dokumen->handleUploadPdf();

        $dokumen->save();



        return redirect('edukasi/dokumen')->with('update', 'Data dokumen berhasil diperbarui.');
    }

    public function destroy( $dokumen)
    {
        $dokumen = Dokumen::find($dokumen);
        $dokumen->delete();
        $dokumen->handleDeletePdf();
        return redirect('edukasi/dokumen')->with('delete', 'Data dokumen berhasil dihapus.');
    }

    public function show($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return view('edukasi.dokumen.show', compact('dokumen'));
    }

    function batal(){
        return redirect('edukasi/dokumen');
    }
}
