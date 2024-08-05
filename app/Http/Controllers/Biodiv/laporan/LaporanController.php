<?php

namespace App\Http\Controllers\Biodiv\Laporan;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Biodiv\Laporan\Laporan;

class LaporanController extends Controller
{
    public function index()
    {
        $list_laporan = Laporan::all()->map(function($laporan) {
            $laporan->formatted_tanggal_dibuat = Carbon::parse($laporan->tanggal_dibuat)->translatedFormat('d F Y');
            return $laporan;
        });
        return view('biodiv.laporan.index', compact('list_laporan'));
    }

    public function create()
    {
        return view('biodiv.laporan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'jenis_laporan' => 'required|string|max:255',
            'judul_laporan' => 'required|string|max:255',
            'tanggal_dibuat' => 'required|date',
            'file_pdf' => 'required|mimes:pdf|max:10000', // contoh validasi untuk file PDF
        ], [
            'jenis_laporan.required' => 'Jenis laporan wajib diisi.',
            'judul_laporan.required' => 'Judul laporan wajib diisi.',
            'tanggal_dibuat.required' => 'Tanggal dibuat wajib diisi.',
            'file_pdf.required' => 'File PDF wajib diupload.',
            'file_pdf.mimes' => 'File harus dalam format PDF.',
            'file_pdf.max' => 'Ukuran file tidak boleh lebih dari 10MB.',
        ]);

        $laporan = new Laporan;
        $laporan->jenis_laporan = $request->jenis_laporan;
        $laporan->judul_laporan = $request->judul_laporan;
        $laporan->tanggal_dibuat = $request->tanggal_dibuat;
        $laporan->handleUploadPdf();
        $laporan->save();

        return redirect('biodiv/laporan')->with('create', 'Data Laporan berhasil disimpan.');
    }

    public function edit($id)
    {
        $report = Laporan::findOrFail($id);
        return view('biodiv.laporan.edit', compact('report'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'jenis_laporan' => 'required|string|max:255',
            'judul_laporan' => 'required|string|max:255',
            'tanggal_dibuat' => 'required|date',
            'file_pdf' => 'nullable|mimes:pdf|max:10000', // contoh validasi untuk file PDF, opsional
        ], [
            'jenis_laporan.required' => 'Jenis laporan wajib diisi.',
            'judul_laporan.required' => 'Judul laporan wajib diisi.',
            'tanggal_dibuat.required' => 'Tanggal dibuat wajib diisi.',
            'file_pdf.mimes' => 'File harus dalam format PDF.',
            'file_pdf.max' => 'Ukuran file tidak boleh lebih dari 10MB.',
        ]);

        $laporan = Laporan::findOrFail($id);
        $laporan->jenis_laporan = $request->jenis_laporan;
        $laporan->judul_laporan = $request->judul_laporan;
        $laporan->tanggal_dibuat = $request->tanggal_dibuat;
        $laporan->save();

        if ($request->hasFile('file_pdf')) {
            $laporan->handleUploadPdf();
        }

        return redirect('biodiv/laporan')->with('update', 'Data Laporan berhasil diperbarui.');
    }

    public function destroy(Laporan $laporan)
    {
        $laporan->handleDeletePdf();
        $laporan->delete();
        return redirect('biodiv/laporan')->with('delete', 'Data Laporan berhasil dihapus.');
    }

    public function show($id)
    {
        $laporan = Laporan::findOrFail($id);
        return view('biodiv.laporan.show', compact('laporan'));
    }

    public function batal()
    {
        return redirect('biodiv/laporan');
    }
}
