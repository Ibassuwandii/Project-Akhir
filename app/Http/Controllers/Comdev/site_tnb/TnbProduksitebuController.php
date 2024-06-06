<?php

namespace App\Http\Controllers\Comdev\site_tnb;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_tnb\ProduksiTebu;
use Illuminate\Http\Request;

class TnbProduksitebuController extends Controller
{
    public function index()
    {
        $data['list_produksitebu'] = ProduksiTebu::all();
        return view('comdev.site_tnb.produksitebu.index',$data);
    }


    public function create()
    {
        return view('comdev.site_tnb.produksitebu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dusun' => 'required',
            'tanggal_produksi' => 'required',
            'produksi' => 'required',
            'hasil_penjualan' => 'required',
            'keterangan' => 'required',
            // 'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan persyaratan Anda
        ]);

        $produksitebu = new ProduksiTebu;
        $produksitebu->nama_dusun = $request->nama_dusun;
        $produksitebu->tanggal_produksi = $request->tanggal_produksi;
        $produksitebu->produksi = $request->produksi;
        $produksitebu->hasil_penjualan = $request->hasil_penjualan;
        $produksitebu->keterangan = $request->keterangan;


        $produksitebu->save();
        $produksitebu->handleUploadFoto();
        return redirect('comdev/site_tnb/produksitebu');
    }


    public function edit( ProduksiTebu $produksitebu)
    {
        $data['produksitebu'] = $produksitebu;
        return view('comdev.site_tnb.produksitebu.edit', $data);
    }





    public function update(Request $request, $id)
    {
         // Mengambil laporan dari basis data berdasarkan ID
         $produksitebu = ProduksiTebu::findOrFail($id);
         $produksitebu->nama_dusun = $request->nama_dusun;
         $produksitebu->tanggal_produksi = $request->tanggal_produksi;
         $produksitebu->produksi = $request->produksi;
         $produksitebu->hasil_penjualan = $request->hasil_penjualan;
         $produksitebu->keterangan = $request->keterangan;



        $produksitebu->save();
        if(request('file_foto')) $produksitebu->handleUploadFoto();
        return redirect('comdev/site_tnb/produksitebu');
    }

    public function destroy(ProduksiTebu $produksitebu)
    {
            $produksitebu->delete();

            return redirect()->back()->with('success', 'Data produksitebu berhasil dihapus.');
    }


    public function show($id)
    {
        $produksitebu = ProduksiTebu::findOrFail($id); // Ambil data produksitebu berdasarkan ID

        // Render view 'show' dan kirimkan data $produksitebu
        return view('comdev.site_tnb.produksitebu.show', compact('produksitebu'));
    }


    function batal(){
        return redirect('comdev/site_tnb/produksitebu');
    }


}
