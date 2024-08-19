<?php

namespace App\Http\Controllers\Comdev\site_tnb;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_tnb\ProduksiTebu;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TnbProduksitebuController extends Controller
{
    public function index()
    {
        $list_produksitebu = Produksitebu::all()->map(function($produksitebu) {
            $produksitebu->formatted_tanggal_produksi = Carbon::parse($produksitebu->tanggal_produksi)->translatedFormat('d F Y');
            return $produksitebu;
        });
        return view('comdev.site_tnb.produksitebu.index', compact('list_produksitebu'));
    }

    public function create()
    {
        return view('comdev.site_tnb.produksitebu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dusun' => 'required|string|max:255',
            'tanggal_produksi' => 'required|date',
            'produksi' => 'required',
            'hasil_penjualan' => 'required',
            // 'keterangan' => 'required|string|max:255',
            'file_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'nama_dusun.required' => 'Field Nama Dusun wajib diisi.',
            'tanggal_produksi.required' => 'Field Tanggal Produksi wajib diisi.',
            'produksi.required' => 'Field Produksi wajib diisi.',
            'hasil_penjualan.required' => 'Field Hasil Penjualan wajib diisi.',
            'keterangan.required' => 'Field Keterangan wajib diisi.',
            'file_foto.image' => 'File Foto harus berupa gambar.',
            'file_foto.mimes' => 'File Foto harus berupa file dengan tipe: jpeg, png, jpg, gif.',
            'file_foto.max' => 'File Foto tidak boleh lebih dari 2MB.',
        ]);

        $produksitebu = new ProduksiTebu;
        $produksitebu->nama_dusun = $request->nama_dusun;
        $produksitebu->tanggal_produksi = $request->tanggal_produksi;
        $produksitebu->produksi = $request->produksi;
        $produksitebu->hasil_penjualan = $request->hasil_penjualan;
        // $produksitebu->keterangan = $request->keterangan;

        $produksitebu->save();

        if ($request->hasFile('file_foto')) {
            $produksitebu->handleUploadFoto();
        }

        return redirect('comdev/site_tnb/produksitebu')->with('create', 'Data Laporan berhasil disimpan.');
    }

    public function edit(ProduksiTebu $produksitebu)
    {
        $data['produksitebu'] = $produksitebu;
        return view('comdev.site_tnb.produksitebu.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_dusun' => 'required|string|max:255',
            'tanggal_produksi' => 'required|date',
            'produksi' => 'required',
            'hasil_penjualan' => 'required',
            // 'keterangan' => 'required|string|max:255',
            'file_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'nama_dusun.required' => 'Field Nama Dusun wajib diisi.',
            'tanggal_produksi.required' => 'Field Tanggal Produksi wajib diisi.',
            'produksi.required' => 'Field Produksi wajib diisi.',
            'hasil_penjualan.required' => 'Field Hasil Penjualan wajib diisi.',
            'keterangan.required' => 'Field Keterangan wajib diisi.',
            'file_foto.image' => 'File Foto harus berupa gambar.',
            'file_foto.mimes' => 'File Foto harus berupa file dengan tipe: jpeg, png, jpg, gif.',
            'file_foto.max' => 'File Foto tidak boleh lebih dari 2MB.',
        ]);

        $produksitebu = ProduksiTebu::findOrFail($id);
        $produksitebu->nama_dusun = $request->nama_dusun;
        $produksitebu->tanggal_produksi = $request->tanggal_produksi;
        $produksitebu->produksi = $request->produksi;
        $produksitebu->hasil_penjualan = $request->hasil_penjualan;
        // $produksitebu->keterangan = $request->keterangan;

        if ($request->hasFile('file_foto')) {
            $produksitebu->handleUploadFoto();
        }

        $produksitebu->save();

        return redirect('comdev/site_tnb/produksitebu')->with('update', 'Data Laporan berhasil diperbarui.');
    }

    public function destroy(ProduksiTebu $produksitebu)
    {
        $produksitebu->delete();

        return redirect()->back()->with('delete', 'Data Produksi Tebu berhasil dihapus.');
    }

    public function show($id)
    {
        $produksitebu = ProduksiTebu::findOrFail($id);
        return view('comdev.site_tnb.produksitebu.show', compact('produksitebu'));
    }

    public function batal()
    {
        return redirect('comdev/site_tnb/produksitebu');
    }
}