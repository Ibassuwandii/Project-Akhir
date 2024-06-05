<?php

namespace App\Http\Controllers\comdev\Dokumentasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\comdev\Dokumentasi\Dokumentasi;

class DokumentasiController extends Controller
{
    public function index()
    {
        $data['list_dokumentasi'] = Dokumentasi::all();
        return view('comdev.dokumentasi.index', $data);
    }

    public function create()
    {
        return view('comdev.dokumentasi.create');
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

        return redirect('comdev/dokumentasi')->with('create', 'Data dokumentasi berhasil disimpan.');
    }

    public function edit($id)
    {
        $data = Dokumentasi::find($id);
        return view('comdev.dokumentasi.edit', compact('data'));
    }




    public function update(Request $request, $id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);
        $dokumentasi->judul_dokumentasi = $request->judul_dokumentasi;
        $dokumentasi->tanggal_kegiatan = $request->tanggal_kegiatan;
        $dokumentasi->link_foto = $request->link_foto;


        $dokumentasi->save();

        return redirect('comdev/dokumentasi')->with('update', 'Data Berhasil Diupdate');
    }

    public function destroy(Dokumentasi $dokumentasi)
    {
        $dokumentasi->delete();

        return redirect()->back()->with('delete', 'Data dokumentasi berhasil dihapus.');
    }

    public function show($id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);
        return view('comdev.dokumentasi.show', compact('dokumentasi'));
    }

    function batal(){
        return redirect('comdev/dokumentasi');
    }
}
