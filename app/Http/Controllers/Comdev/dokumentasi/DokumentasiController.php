<?php

namespace App\Http\Controllers\comdev\Dokumentasi;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\comdev\Dokumentasi\Dokumentasi;
use App\Models\Comment;

class DokumentasiController extends Controller
{
    public function index()
    {
        $list_dokumentasi = Dokumentasi::with('comment')->get();

        return view('comdev.dokumentasi.index', compact('list_dokumentasi'));
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
        'comment' => 'nullable|string', // Validasi komentar jika ada
    ]);

    $dokumentasi = new Dokumentasi;
    $dokumentasi->judul_dokumentasi = $request->judul_dokumentasi;
    $dokumentasi->tanggal_kegiatan = $request->tanggal_kegiatan;
    $dokumentasi->link_foto = $request->link_foto;
    $dokumentasi->save();

    // Create a new comment if provided
    if ($request->has('comment')) {
        $comment = new Comment();
        $comment->dokumentasi_id = $dokumentasi->id;
        $comment->comment = $request->comment; // Pastikan ini sesuai dengan nama kolom
        $comment->save();
    }

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
        $dokumentasi = Dokumentasi::with('comment')->findOrFail($id);
        return view('comdev.dokumentasi.show', compact('dokumentasi'));
    }

    public function batal()
    {
        return redirect('comdev/dokumentasi');
    }

    public function storeComment(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        $dokumentasi = Dokumentasi::findOrFail($id);

        $comment = new Comment();
        $comment->dokumentasi_id = $dokumentasi->id;
        $comment->comment = $request->comment; // Pastikan ini sesuai dengan nama kolom
        $comment->save();

        return redirect()->route('dokumentasi.show', $id)->with('success', 'Komentar berhasil ditambahkan.');
    }
}