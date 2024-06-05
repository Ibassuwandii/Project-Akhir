<?php

namespace App\Http\Controllers\edukasi\peta;

use App\Http\Controllers\Controller;
use App\Models\edukasi\peta\Peta;
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
            'tanggal_upload' => 'required',
            'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $peta = new Peta;
        $peta->judul_peta = $request->judul_peta;
        $peta->tanggal_upload = $request->tanggal_upload;

        $peta->handleUploadFoto();
        $peta->save();

        return redirect('edukasi/peta')->with('create', 'Data peta berhasil ditambahkan.');
    }


    public function edit($id)
    {
    $peta = Peta::findOrFail($id);
    return view('edukasi.peta.edit', compact('peta'));
    }





    public function update(Request $request, $id)
    {
        $peta = Peta::findOrFail($id);
        $peta->judul_peta = $request->judul_peta;
        $peta->tanggal_upload = $request->tanggal_upload;
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
        $peta = peta::findOrFail($id);
        return view('edukasi.peta.show', compact('peta'));
    }

    function batal(){
        return redirect('edukasi/peta');
    }

}
