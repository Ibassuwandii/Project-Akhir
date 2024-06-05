<?php

namespace App\Http\Controllers\Comdev\site_tnb;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_tnb\Perikanan;
use Illuminate\Http\Request;

class TnbPerikananController extends Controller
{
    public function index()
    {
        $data['list_perikanan'] = Perikanan::all();
        return view('comdev.site_tnb.perikanan.index',$data);
    }


    public function create()
    {
        return view('comdev.site_tnb.perikanan.create');
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
            // 'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan persyaratan Anda
        ]);

        $perikanan = new Perikanan;
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

        return redirect('comdev/site_tnb/perikanan');
    }


    public function edit( Perikanan $perikanan)
    {
        $data['perikanan'] = $perikanan;
        return view('comdev.site_tnb.perikanan.edit', $data);
    }





    public function update(Request $request, $id)
    {
         // Mengambil laporan dari basis data berdasarkan ID
         $perikanan = Perikanan::findOrFail($id);

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

        return redirect('comdev/site_tnb/perikanan');
    }

    public function destroy(Perikanan $perikanan)
    {
            $perikanan->delete();

            return redirect()->back()->with('success', 'Data perikan$perikanan berhasil dihapus.');
    }


    public function show($id)
    {
        $perikanan = Perikanan::findOrFail($id); // Ambil data pertanian berdasarkan ID

        // Render view 'show' dan kirimkan data $pertanian
        return view('comdev.site_tnb.perikanan.show', compact('perikanan'));
    }

    function batal(){
        return redirect('comdev/site_tnb/perikanan');
    }

}
