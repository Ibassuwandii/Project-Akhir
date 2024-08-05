<?php

namespace App\Http\Controllers\Comdev\Laporan;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comdev\Laporan\Laporan;

class LaporanController extends Controller
{
    public function index()
    {
        $list_laporan = Laporan::all()->map(function($laporan) {
            $laporan->formatted_tanggal_dibuat = Carbon::parse($laporan->tanggal_dibuat)->translatedFormat('d F Y');
            return $laporan;
        });
        return view('comdev.laporan.index', compact('list_laporan'));
    }

    public function create()
    {
        return view('comdev.laporan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_laporan' => 'required',
            'judul_laporan' => 'required',
            'tanggal_dibuat' => 'required|date',
            'file_pdf' => 'required|mimes:pdf|max:2048',
        ], [
            'jenis_laporan.required' => 'Field Jenis Laporan wajib diisi.',
            'judul_laporan.required' => 'Field Judul Laporan wajib diisi.',
            'tanggal_dibuat.required' => 'Field Tanggal Dibuat wajib diisi.',
            'tanggal_dibuat.date' => 'Field Tanggal Dibuat harus berupa tanggal yang valid.',
            'file_pdf.required' => 'File PDF wajib diunggah.',
            'file_pdf.mimes' => 'File harus berupa PDF.',
            'file_pdf.max' => 'Ukuran file tidak boleh lebih dari 2048 KB.',
        ]);

        $laporan = new Laporan;
        $laporan->jenis_laporan = $request->jenis_laporan;
        $laporan->judul_laporan = $request->judul_laporan;
        $laporan->tanggal_dibuat = $request->tanggal_dibuat;
        $laporan->handleUploadPdf();
        $laporan->save();

        return redirect('comdev/laporan')->with('create', 'Data Laporan berhasil disimpan.');
    }

    public function edit($id)
    {
        $report = Laporan::findOrFail($id);
        return view('comdev.laporan.edit', compact('report'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_laporan' => 'required',
            'judul_laporan' => 'required',
            'tanggal_dibuat' => 'required|date',
            'file_pdf' => 'nullable|mimes:pdf|max:2048',
        ], [
            'jenis_laporan.required' => 'Field Jenis Laporan wajib diisi.',
            'judul_laporan.required' => 'Field Judul Laporan wajib diisi.',
            'tanggal_dibuat.required' => 'Field Tanggal Dibuat wajib diisi.',
            'tanggal_dibuat.date' => 'Field Tanggal Dibuat harus berupa tanggal yang valid.',
            'file_pdf.mimes' => 'File harus berupa PDF.',
            'file_pdf.max' => 'Ukuran file tidak boleh lebih dari 2048 KB.',
        ]);

        $laporan = Laporan::findOrFail($id);
        $laporan->jenis_laporan = $request->jenis_laporan;
        $laporan->judul_laporan = $request->judul_laporan;
        $laporan->tanggal_dibuat = $request->tanggal_dibuat;
        $laporan->save();

        if ($request->hasFile('file_pdf')) {
            $laporan->handleUploadPdf();
        }

        return redirect('comdev/laporan')->with('update', 'Data Laporan berhasil diperbarui.');
    }

    public function destroy(Laporan $laporan)
    {
        $laporan->delete();
        $laporan->handleDeletePdf();
        return redirect('comdev/laporan')->with('delete', 'Data Laporan berhasil dihapus.');
    }

    public function show($id)
    {
        $laporan = Laporan::findOrFail($id);
        return view('comdev.laporan.show', compact('laporan'));
    }

    public function batal()
    {
        return redirect('comdev/laporan');
    }
}
