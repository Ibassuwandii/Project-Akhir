<?php

namespace App\Http\Controllers\Comdev\site_tnb;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_tnb\KapalSayur;
use Illuminate\Http\Request;
use Carbon\Carbon;


class TnbKapalsayurController extends Controller
{
    public function index()
    {
        $list_kapalsayur = KapalSayur::all()->map(function($kapalsayur) {
            $kapalsayur->formatted_tanggal_trip = Carbon::parse($kapalsayur->tanggal_trip)->translatedFormat('d F Y');
            return $kapalsayur;
        });
        return view('comdev.site_tnb.kapalsayur.index', ['list_kapalsayur' => $list_kapalsayur]);
    }


    public function create()
    {
        return view('comdev.site_tnb.kapalsayur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'id_nama' => 'required|unique:site_tnb__kapalsayur',
            'jenis_kelamin' => 'required',
            'tanggal_trip' => 'required',
            'jumlah_trip' => 'required',
            'hasil_penjualan' => 'required',
            'iuran' => 'required'
        ], [
            'nama.required' => 'Field Nama Trip wajib diisi.',
            'id_nama.required' => 'Field Id Nama Trip wajib diisi.',
            'jenis_kelamin.required' => 'Field Jenis Kelamin Trip wajib diisi.',
            'jumlah_trip.required' => 'Field Jumlah Trip wajib diisi.',
            'hasil_penjualan.required' => 'Field Hasil Penjualan wajib diisi.',
            'iuran.required' => 'Field iuran Wwajib diisi.',
        ]);

        $kapalsayur = new KapalSayur;
        $kapalsayur->nama = $request->nama;
        $kapalsayur->id_nama = $request->id_nama;
        $kapalsayur->jenis_kelamin = $request->jenis_kelamin;
        $kapalsayur->tanggal_trip = $request->tanggal_trip;
        $kapalsayur->jumlah_trip = $request->jumlah_trip;
        $kapalsayur->hasil_penjualan = $request->hasil_penjualan;
        $kapalsayur->iuran = $request->iuran;


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
            'nama' => 'required',
            // 'id_nama' => 'required|unique:site_tnb__kapalsayur',
            'jenis_kelamin' => 'required',
            'tanggal_trip' => 'required',
            'jumlah_trip' => 'required',
            'hasil_penjualan' => 'required',
            'iuran' => 'required'
        ], [
            'nama.required' => 'Field Nama Trip wajib diisi.',
            'id_nama.required' => 'Field Id Nama Trip wajib diisi.',
            'jenis_kelamin.required' => 'Field Jenis Kelamin Trip wajib diisi.',
            'jumlah_trip.required' => 'Field Jumlah Trip wajib diisi.',
            'hasil_penjualan.required' => 'Field Hasil Penjualan wajib diisi.',
            'iuran.required' => 'Field Iuran Wwajib diisi.',
        ]);

        $kapalsayur = KapalSayur::findOrFail($id);
        $kapalsayur->nama = $request->nama;
        $kapalsayur->id_nama = $request->id_nama;
        $kapalsayur->jenis_kelamin = $request->jenis_kelamin;
        $kapalsayur->tanggal_trip = $request->tanggal_trip;
        $kapalsayur->jumlah_trip = $request->jumlah_trip;
        $kapalsayur->hasil_penjualan = $request->hasil_penjualan;
        $kapalsayur->iuran = $request->iuran;

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


    function batal()
    {
        return redirect('comdev/site_tnb/kapalsayur');
    }

}