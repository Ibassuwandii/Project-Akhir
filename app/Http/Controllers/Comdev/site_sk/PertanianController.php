<?php

namespace App\Http\Controllers\Comdev\site_sk;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Pertanian;
use Illuminate\Http\Request;

class PertanianController extends Controller
{
    public function index()
    {
        $data['list_pertanian'] = Pertanian::all();
        return view('comdev.site_sk.pertanian.index',$data);
    }


    public function create()
    {
        return view('comdev.site_sk.pertanian.create');
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
            'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
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

        return redirect('comdev/site_sk/pertanian')->with('create', 'Data pertanian berhasil dihapus.');
    }


    public function edit( Pertanian $pertanian)
    {
        $data['pertanian'] = $pertanian;
        return view('comdev.site_sk.pertanian.edit', $data);
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
        if(request('file_foto')) $pertanian->handleUploadFoto();

        return redirect('comdev/site_sk/pertanian')->with('update', 'Data pertanian berhasil dihapus.');
    }

    public function destroy(Pertanian $pertanian)
    {
        $pertanian->delete();
        $pertanian->handleDeleteFoto();
        return redirect()->back()->with('delete', 'Data pertanian berhasil dihapus.');
    }


    public function show($id)
    {
        $pertanian = Pertanian::findOrFail($id); // Ambil data pertanian berdasarkan ID

        // Render view 'show' dan kirimkan data $pertanian
        return view('comdev.site_sk.pertanian.show', compact('pertanian'));
    }

    function batal(){
        return redirect('comdev/site_sk/pertanian');
    }

}
