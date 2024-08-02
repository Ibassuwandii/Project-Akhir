<?php

namespace App\Http\Controllers\Comdev\site_sk;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Bangusman;
use Illuminate\Http\Request;

class BangusmanController extends Controller
{
    public function index()
    {
        $data['list_bangusman'] = Bangusman::all();
        return view('comdev.site_sk.bangusman.index', $data);
    }

    public function create()
    {
        return view('comdev.site_sk.bangusman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kub' => 'required',
            'nama_penerima' => 'required',
            'tanggal_investasi' => 'required|date',
            'jumlah_investasi' => 'required',
            'komuditas' => 'required',
            'masa_pengembalian' => 'required',
        ], [
            'nama_kub.required' => 'Field Nama KUB wajib diisi.',
            'nama_penerima.required' => 'Field Nama Penerima wajib diisi.',
            'tanggal_investasi.required' => 'Field Tanggal Investasi wajib diisi.',
            'tanggal_investasi.date' => 'Field Tanggal Investasi harus berupa tanggal yang valid.',
            'jumlah_investasi.required' => 'Field Jumlah Investasi wajib diisi.',
            'komuditas.required' => 'Field Komuditas wajib diisi.',
            'masa_pengembalian.required' => 'Field Masa Pengembalian wajib diisi.',

        ]);

        $bangusman = new Bangusman;
        $bangusman->nama_kub = $request->nama_kub;
        $bangusman->nama_penerima = $request->nama_penerima;
        $bangusman->tanggal_investasi = $request->tanggal_investasi;
        $bangusman->jumlah_investasi = $request->jumlah_investasi;
        $bangusman->komuditas = $request->komuditas;
        $bangusman->masa_pengembalian = $request->masa_pengembalian;

        $bangusman->handleUploadFoto();
        $bangusman->save();

        return redirect('comdev/site_sk/bangusman')->with('create', 'Data Laporan berhasil disimpan.');
    }

    public function edit(Bangusman $bangusman)
    {
        $data['bangusman'] = $bangusman;
        return view('comdev.site_sk.bangusman.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kub' => 'required',
            'nama_penerima' => 'required',
            'tanggal_investasi' => 'required|date',
            'jumlah_investasi' => 'required',
            'komuditas' => 'required',
            'masa_pengembalian' => 'required',
        ], [
            'nama_kub.required' => 'Field Nama KUB wajib diisi.',
            'nama_penerima.required' => 'Field Nama Penerima wajib diisi.',
            'tanggal_investasi.required' => 'Field Tanggal Investasi wajib diisi.',
            'tanggal_investasi.date' => 'Field Tanggal Investasi harus berupa tanggal yang valid.',
            'jumlah_investasi.required' => 'Field Jumlah Investasi wajib diisi.',
            'komuditas.required' => 'Field Komuditas wajib diisi.',
            'masa_pengembalian.required' => 'Field Masa Pengembalian wajib diisi.',

        ]);

        $bangusman = Bangusman::findOrFail($id);
        $bangusman->nama_kub = $request->nama_kub;
        $bangusman->nama_penerima = $request->nama_penerima;
        $bangusman->tanggal_investasi = $request->tanggal_investasi;
        $bangusman->jumlah_investasi = $request->jumlah_investasi;
        $bangusman->komuditas = $request->komuditas;
        $bangusman->masa_pengembalian = $request->masa_pengembalian;

        $bangusman->save();

        if ($request->hasFile('file_foto')) {
            $bangusman->handleUploadFoto();
        }

        return redirect('comdev/site_sk/bangusman')->with('update', 'Data Laporan berhasil diperbarui.');
    }

    public function show($id)
    {
        $bangusman = Bangusman::findOrFail($id);
        return view('comdev.site_sk.bangusman.show', compact('bangusman'));
    }

    public function destroy(Bangusman $bangusman)
    {
        $bangusman->handleDeleteFoto();
        $bangusman->delete();
        return redirect()->back()->with('delete', 'Data bangusman berhasil dihapus.');
    }

    public function batal()
    {
        return redirect('comdev/site_sk/bangusman');
    }
}
