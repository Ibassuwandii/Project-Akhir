<?php

namespace App\Http\Controllers\Comdev\site_pgsb;

use carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\comdev\site_pgsb\Pertanian;
use Illuminate\Http\Request;

class PgsbPertanianController extends Controller
{
    public function index()
    {
        $list_pertanian = pertanian::all()->map(function ($pertanian) {
            $pertanian->formatted_tanggal = Carbon::parse($pertanian->tanggal)->translatedFormat('d F Y');
            return $pertanian;
        });
        return view('comdev.site_pgsb.pertanian.index', compact('list_pertanian'));
    }


    public function create()
    {
        return view('comdev.site_pgsb.pertanian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_desa' => 'required',
            'komuditas' => 'required',
            'luas_lahan' => 'required',
            'hasil_sebelum' => 'required',
            'hasil_target' => 'required',
            'hasil_akhir' => 'required',
            'keterangan' => 'required',
            'jumlah_penerima_laki_laki' => 'required',
            'jumlah_penerima_perempuan' => 'required',
            // 'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan persyaratan Anda
        ]);

        $pertanian = new pertanian;
        $pertanian->nama_desa = $request->nama_desa;
        $pertanian->komuditas = $request->komuditas;
        $pertanian->luas_lahan = $request->luas_lahan;
        $pertanian->hasil_sebelum = $request->hasil_sebelum;
        $pertanian->hasil_target = $request->hasil_target;
        $pertanian->hasil_akhir = $request->hasil_akhir;
        $pertanian->keterangan = $request->keterangan;
        $pertanian->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
        $pertanian->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;

        $pertanian->handleUploadFoto();
        $pertanian->save();
        return redirect('comdev/site_pgsb/pertanian');
    }


    public function edit($id)
    {
        $pertanian = Pertanian::findOrFail($id);
        // Pastikan tanggal adalah objek Carbon
        $pertanian->tanggal = \Carbon\Carbon::parse($pertanian->tanggal);
        return view('comdev.site_pgsb.pertanian.edit', ['pertanian' => $pertanian]);
    }





    public function update(Request $request, $id)
    {
        // Mengambil laporan dari basis data berdasarkan ID
        $pertanian = Pertanian::findOrFail($id);

        // Menetapkan nilai properti dari permintaan
        $pertanian->nama_desa = $request->nama_desa;
        $pertanian->komuditas = $request->komuditas;
        $pertanian->luas_lahan = $request->luas_lahan;
        $pertanian->hasil_sebelum = $request->hasil_sebelum;
        $pertanian->hasil_target = $request->hasil_target;
        $pertanian->hasil_akhir = $request->hasil_akhir;
        $pertanian->keterangan = $request->keterangan;
        $pertanian->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
        $pertanian->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;



        $pertanian->save();
        if (request('file_foto')) $pertanian->handleUploadFoto();
        return redirect('comdev/site_pgsb/pertanian');
    }

    public function destroy(Pertanian $pertanian)
    {
        $pertanian->delete();
        $pertanian->handleDeleteFoto();
        return redirect()->back()->with('success', 'Data pertanian berhasil dihapus.');
    }


    public function show($id)
    {
        $pertanian = Pertanian::findOrFail($id);
        $pertanian->tanggal = \Carbon\Carbon::parse($pertanian->tanggal); // Pastikan tanggal adalah objek Carbon
        return view('comdev.site_pgsb.pertanian.show', ['pertanian' => $pertanian]);
    }
}