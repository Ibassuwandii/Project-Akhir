<?php

namespace App\Http\Controllers\Comdev\site_sk;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Rangkong;
use Illuminate\Http\Request;

class RangkongController extends Controller
{
    public function index()
    {
        $data['list_rangkong'] = Rangkong::all();
        return view('comdev.site_sk.rangkong.index',$data);
    }


    public function create()
    {
        return view('comdev.site_sk.rangkong.create');
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

        ]);

        $rangkong = new Rangkong;
        $rangkong->nama_desa = $request->nama_desa;
        $rangkong->komuditas = $request->komuditas;
        $rangkong->luas_lahan = $request->luas_lahan;
        $rangkong->hasil_sebelum = $request->hasil_sebelum;
        $rangkong->hasil_target = $request->hasil_target;
        $rangkong->hasil_akhir = $request->hasil_akhir;
        $rangkong->keterangan = $request->keterangan;
        $rangkong->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
        $rangkong->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;



        $rangkong->save();

        return redirect('comdev/site_sk/rangkong');
    }


    public function edit( Rangkong $rangkong)
    {
        $data['rangkong'] = $rangkong;
        return view('comdev.site_sk.rangkong.edit', $data);
    }





    public function update(Request $request, $id)
    {
         // Mengambil laporan dari basis data berdasarkan ID
         $rangkong = Rangkong::findOrFail($id);

         // Menetapkan nilai properti dari permintaan
         $rangkong->nama_desa = $request->nama_desa;
         $rangkong->komuditas = $request->komuditas;
         $rangkong->luas_lahan = $request->luas_lahan;
         $rangkong->hasil_sebelum = $request->hasil_sebelum;
         $rangkong->hasil_target = $request->hasil_target;
         $rangkong->hasil_akhir = $request->hasil_akhir;
         $rangkong->keterangan = $request->keterangan;
         $rangkong->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
         $rangkong->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;


          // Menyimpan file foto jika ada unggahan baru


        $rangkong->save();

        return redirect('comdev/site_sk/rangkong');
    }

    public function destroy(Rangkong $rangkong)
    {
            $rangkong->delete();

            return redirect()->back()->with('success', 'Data rangkong berhasil dihapus.');
    }


    public function show($id)
    {
        $rangkong = Rangkong::findOrFail($id); // Ambil data rangkong berdasarkan ID

        // Render view 'show' dan kirimkan data $rangkong
        return view('comdev.site_sk.rangkong.show', compact('rangkong'));
    }

    function batal(){
        return redirect('comdev/site_sk/rangkong');
    }

}
