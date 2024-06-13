<?php

namespace App\Http\Controllers\Comdev\Laporan;

use carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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
            'tanggal_dibuat' => 'required',
            'judul_laporan' => 'required',
            'file_pdf' => 'required|file|mimes:pdf,jpg|max:2048',
            'tanggal_dibuat' => 'required|date',
        ]);

        $laporan = new Laporan;
        $laporan->jenis_laporan = $request->jenis_laporan;
        $laporan->judul_laporan = $request->judul_laporan;
        $laporan->tanggal_dibuat = $request->judul_laporan;
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
        $laporan = Laporan::findOrFail($id);
        $laporan->jenis_laporan = $request->jenis_laporan;
        $laporan->tanggal_dibuat = $request->tanggal_dibuat;
        $laporan->judul_laporan = $request->judul_laporan;



        $laporan->save();

        if(request('file_pdf')) $laporan->handleUploadPdf();

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

    function batal(){
        return redirect('comdev/laporan');
    }
}
