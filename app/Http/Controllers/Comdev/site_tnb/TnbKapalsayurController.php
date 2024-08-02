<?php

namespace App\Http\Controllers\Comdev\site_tnb;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_tnb\KapalSayur;
use Illuminate\Http\Request;

class TnbKapalsayurController extends Controller
{
    public function index()
    {
        $data['list_kapalsayur'] = KapalSayur::all();
        return view('comdev.site_tnb.kapalsayur.index',$data);
    }


    public function create()
    {
        return view('comdev.site_tnb.kapalsayur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_trip' => 'required',
            'jumlah_trip' => 'required',
            'hasil_penjualan' => 'required',
            'keterangan' => 'required'
    ], [
        'tanggal_trip.required' => 'Field Tanggal Trip wajib diisi.',
        'jumlah_trip.required' => 'Field Jumlah Trip wajib diisi.',
        'hasil_penjualan.required' => 'Field Hasil Penjualan wajib diisi.',
        'keterangan.required' => 'Field Keterangan Wwajib diisi.',
    ]);

        $kapalsayur = new KapalSayur;
        $kapalsayur->tanggal_trip = $request->tanggal_trip;
        $kapalsayur->jumlah_trip = $request->jumlah_trip;
        $kapalsayur->hasil_penjualan = $request->hasil_penjualan;
        $kapalsayur->keterangan = $request->keterangan;


        $kapalsayur->handleUploadFoto();
        $kapalsayur->save();

        return redirect('comdev/site_tnb/kapalsayur')->with('create', 'Data Laporan berhasil disimpan.');
    }


    public function edit(KapalSayur $kapalsayur)
    {
        return view('comdev.site_tnb.kapalsayur.edit', compact('kapalsayur'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_trip' => 'required',
            'jumlah_trip' => 'required',
            'hasil_penjualan' => 'required',
            'keterangan' => 'required'
        ], [
            'tanggal_trip.required' => 'Field Tanggal Trip wajib diisi.',
            'jumlah_trip.required' => 'Field Jumlah Trip wajib diisi.',
            'hasil_penjualan.required' => 'Field Hasil Penjualan wajib diisi.',
            'keterangan.required' => 'Field Keterangan wajib diisi.',
        ]);

        $kapalsayur = KapalSayur::findOrFail($id);
        $kapalsayur->tanggal_trip = $request->tanggal_trip;
        $kapalsayur->jumlah_trip = $request->jumlah_trip;
        $kapalsayur->hasil_penjualan = $request->hasil_penjualan;
        $kapalsayur->keterangan = $request->keterangan;

        // Periksa apakah ada file foto yang diupload
        if ($request->hasFile('file_foto')) {
            $kapalsayur->handleUploadFoto();
        }

        $kapalsayur->save();

        return redirect('comdev/site_tnb/kapalsayur')->with('update', 'Data berhasil diperbarui.');
    }



    public function destroy(KapalSayur $kapalsayur)
    {
            $kapalsayur->delete();

            return redirect()->back()->with('delete', 'Data kapalsayur berhasil dihapus.');
    }


    public function show($id)
    {
        $kapalsayur = KapalSayur::findOrFail($id); // Ambil data kapalsayur berdasarkan ID

        // Render view 'show' dan kirimkan data $kapalsayur
        return view('comdev.site_tnb.kapalsayur.show', compact('kapalsayur'));
    }


    function batal(){
        return redirect('comdev/site_tnb/kapalsayur');
    }


}
