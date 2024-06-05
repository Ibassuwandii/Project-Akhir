<?php

namespace App\Http\Controllers\Comdev\site_sk;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Perikanan;
use Illuminate\Http\Request;

class PerikananController extends Controller
{
    public function index()
    {
        $data['list_perikanan'] = Perikanan::all();
        return view('comdev.site_sk.perikanan.index',$data);
    }


    public function create()
    {
        return view('comdev.site_sk.perikanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_desa' => 'required',
            'komuditas' => 'required',
            'luas_kolam' => 'required',
            'hasil_sebelum' => 'required',
            'hasil_target' => 'required',
            'hasil_akhir' => 'required',
            'keterangan' => 'required',
            'jumlah_penerima_laki_laki' => 'required',
            'jumlah_penerima_perempuan' => 'required',
            'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $perikanan = new perikanan;
        $perikanan->nama_desa = $request->nama_desa;
        $perikanan->komuditas = $request->komuditas;
        $perikanan->luas_kolam = $request->luas_kolam;
        $perikanan->hasil_sebelum = $request->hasil_sebelum;
        $perikanan->hasil_target = $request->hasil_target;
        $perikanan->hasil_akhir = $request->hasil_akhir;
        $perikanan->keterangan = $request->keterangan;
        $perikanan->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
        $perikanan->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;

        $perikanan->handleUploadFoto();
        $perikanan->save();

        return redirect('comdev/site_sk/perikanan')->with('create', 'Data perikanan berhasil dihapus.');
    }


    public function edit( perikanan $perikanan)
    {
        $data['perikanan'] = $perikanan;
        return view('comdev.site_sk.perikanan.edit', $data);
    }





    public function update(Request $request, $id)
    {
         // Mengambil laporan dari basis data berdasarkan ID
         $perikanan = perikanan::findOrFail($id);

         // Menetapkan nilai properti dari permintaan
         $perikanan->nama_desa = $request->nama_desa;
         $perikanan->komuditas = $request->komuditas;
         $perikanan->luas_kolam = $request->luas_kolam;
         $perikanan->hasil_sebelum = $request->hasil_sebelum;
         $perikanan->hasil_target = $request->hasil_target;
         $perikanan->hasil_akhir = $request->hasil_akhir;
         $perikanan->keterangan = $request->keterangan;
         $perikanan->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
         $perikanan->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;




        $perikanan->save();
        if(request('file_foto')) $perikanan->handleUploadFoto();

        return redirect('comdev/site_sk/perikanan')->with('update', 'Data perikanan berhasil dihapus.');
    }

    public function destroy(perikanan $perikanan)
    {
        $perikanan->delete();
        $perikanan->handleDeleteFoto();
        return redirect()->back()->with('delete', 'Data perikanan berhasil dihapus.');
    }


    public function show($id)
    {
        $perikanan = perikanan::findOrFail($id); // Ambil data perikanan berdasarkan ID

        // Render view 'show' dan kirimkan data $perikanan
        return view('comdev.site_sk.perikanan.show', compact('perikanan'));
    }

    function batal(){
        return redirect('comdev/site_sk/perikanan');
    }

}
