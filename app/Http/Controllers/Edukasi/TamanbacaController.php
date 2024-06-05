<?php

namespace App\Http\Controllers\Edukasi;

use App\Http\Controllers\Controller;
use App\Models\Edukasi\Tamanbaca;
use Illuminate\Http\Request;

class TamanbacaController extends Controller
{
    public function index()
    {
        $data['list_tamanbaca'] = Tamanbaca::all();
        return view('Edukasi.tamanbaca.index',$data);
    }


    public function create()
    {
        return view('Edukasi.Tamanbaca.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jumlah_pengunjung' => 'required',
            'buku_dipinjam' => 'required',
            'tanggal' => 'required',
            'nama' => 'required',
            'hasil_target' => 'required',
            'hasil_akhir' => 'required',
            'keterangan' => 'required',
            'jumlah_penerima_laki_laki' => 'required',
            'jumlah_penerima_perempuan' => 'required',
            'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $Tamanbaca = new Tamanbaca;
        $Tamanbaca->jumlah_pengunjung = $request->jumlah_pengunjung;
        $Tamanbaca->buku_dipinjam = $request->buku_dipinjam;
        $Tamanbaca->tanggal = $request->tanggal;
        $Tamanbaca->nama = $request->nama;
        $Tamanbaca->hasil_target = $request->hasil_target;
        $Tamanbaca->hasil_akhir = $request->hasil_akhir;
        $Tamanbaca->keterangan = $request->keterangan;
        $Tamanbaca->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
        $Tamanbaca->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;

        $Tamanbaca->handleUploadFoto();
        $Tamanbaca->save();

        return redirect('Edukasi/tamanbaca')->with('create', 'Data Tamanbaca berhasil dihapus.');
    }


    public function edit( Tamanbaca $Tamanbaca)
    {
        $data['Tamanbaca'] = $Tamanbaca;
        return view('Edukasi.tamanbaca.edit', $data);
    }





    public function update(Request $request, $id)
    {
         // Mengambil laporan dari basis data berdasarkan ID
         $Tamanbaca = Tamanbaca::findOrFail($id);

         // Menetapkan nilai properti dari permintaan
         $Tamanbaca->jumlah_pengunjung = $request->jumlah_pengunjung;
         $Tamanbaca->buku_dipinjam = $request->buku_dipinjam;
         $Tamanbaca->tanggal = $request->tanggal;
         $Tamanbaca->nama = $request->nama;
         $Tamanbaca->hasil_target = $request->hasil_target;
         $Tamanbaca->hasil_akhir = $request->hasil_akhir;
         $Tamanbaca->keterangan = $request->keterangan;
         $Tamanbaca->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
         $Tamanbaca->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;




        $Tamanbaca->save();
        if(request('file_foto')) $Tamanbaca->handleUploadFoto();

        return redirect('Edukasi/tamanbaca')->with('update', 'Data Tamanbaca berhasil dihapus.');
    }

    public function destroy(Tamanbaca $Tamanbaca)
    {
        $Tamanbaca->delete();
        $Tamanbaca->handleDeleteFoto();
        return redirect()->back()->with('delete', 'Data Tamanbaca berhasil dihapus.');
    }


    public function show($id)
    {
        $Tamanbaca = Tamanbaca::findOrFail($id); // Ambil data Tamanbaca berdasarkan ID

        // Render view 'show' dan kirimkan data $Tamanbaca
        return view('Edukasi.tamanbaca.show', compact('Tamanbaca'));
    }

    function batal(){
        return redirect('Edukasi/tamanbaca');
    }

}
