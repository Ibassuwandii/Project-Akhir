<?php

namespace App\Http\Controllers\Edukasi\Peta;

use App\Http\Controllers\Controller;
use App\Models\Edukasi\peta\Peta;
use Illuminate\Http\Request;

class PetaController extends Controller
{
    public function index()
    {
        $data['list_peta'] = Peta::all();
        return view('edukasi.peta.index',$data);
    }


    public function create()
    {
        return view('edukasi.peta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_peta' => 'required',
            'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan persyaratan Anda
        ]);

        $peta = new Peta;
        $peta->judul_peta = $request->judul_peta;

        // if ($request->hasFile('file_foto')) {
        //     $fileFoto = $request->file('file_foto');
        //     $namaFileFoto = $fileFoto->getClientOriginalName(); // Dapatkan nama file asli
        //     $fileFotoPath = $fileFoto->storeAs('public/foto/peta', $namaFileFoto); // Simpan dengan nama asli
        //     $peta->file_foto = 'storage/foto/peta/' . $namaFileFoto; // Simpan path ke basis data
        // }

        $peta->handleUploadFoto();

        $peta->save();


        return redirect('edukasi/peta')->with('create', 'Data peta berhasil disimpan.');
    }


    public function edit( Peta $peta)
    {
        $data['peta'] = $peta;
        return view('edukasi.peta.edit', $data);
    }





    public function update(Request $request, $id)
    {
         // Mengambil peta dari basis data berdasarkan ID
         $peta = Peta::findOrFail($id);

         // Menetapkan nilai properti dari permintaan
         $peta->judul_peta = $request->judul_peta;


        $peta->save();

        if(request('file_foto')) $peta->handleUploadFoto();

        return redirect('edukasi/peta')->with('update', 'Data peta berhasil diupdate.');
    }


    public function destroy($id)
    {
        $peta = Peta::findOrFail($id);
        $peta->handleDeleteFoto();
        $peta->delete();

        return redirect('edukasi/peta')->with('delete', 'Data peta berhasil dihapus.');
    }




    public function show($id)
    {
        $peta = Peta::findOrFail($id); // Ambil data pertanian berdasarkan ID

        // Render view 'show' dan kirimkan data $pertanian
        return view('edukasi.peta.show', compact('peta'));
    }

    function batal(){
        return redirect('edukasi/peta');
    }

}
