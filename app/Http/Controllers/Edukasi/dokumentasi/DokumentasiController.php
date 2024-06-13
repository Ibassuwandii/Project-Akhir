<?php

namespace App\Http\Controllers\edukasi\Dokumentasi;

use carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\edukasi\Dokumentasi\Dokumentasi;

class DokumentasiController extends Controller
{
    public function index()
    {
        $list_dokumentasi = Dokumentasi::all()->map(function($dokumentasi) {
            $dokumentasi->formatted_tanggal_kegiatan = Carbon::parse($dokumentasi->tanggal_kegiatan)->translatedFormat('d F Y');
            return $dokumentasi;
        });
        return view('edukasi.dokumentasi.index', compact('list_dokumentasi'));
    }

    public function create()
    {
        return view('edukasi.dokumentasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_dokumentasi' => 'required',
            'tanggal_kegiatan' => 'required|date',
            'link_foto' => 'required',
        ]);

        $dokumentasi = new Dokumentasi;
        $dokumentasi->judul_dokumentasi = $request->judul_dokumentasi;
        $dokumentasi->tanggal_kegiatan = $request->tanggal_kegiatan;
        $dokumentasi->link_foto = $request->link_foto;
        $dokumentasi->save();

        return redirect('edukasi/dokumentasi')->with('create', 'Data dokumentasi berhasil disimpan.');
    }

    public function edit($id)
    {
        $data = Dokumentasi::find($id);
        return view('edukasi.dokumentasi.edit', compact('data'));
    }




    public function update(Request $request, $id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);
        $dokumentasi->judul_dokumentasi = $request->judul_dokumentasi;
        $dokumentasi->tanggal_kegiatan = $request->tanggal_kegiatan;
        $dokumentasi->link_foto = $request->link_foto;


        $dokumentasi->save();

        return redirect('edukasi/dokumentasi')->with('update', 'Data Berhasil Diupdate');
    }

    public function destroy(Dokumentasi $dokumentasi)
    {
        $dokumentasi->delete();

        return redirect()->back()->with('delete', 'Data dokumentasi berhasil dihapus.');
    }

    public function show($id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);
        return view('edukasi.dokumentasi.show', compact('dokumentasi'));
    }

    function batal(){
        return redirect('edukasi/dokumentasi');
    }
}
