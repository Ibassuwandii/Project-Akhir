<?php

namespace App\Http\Controllers\Comdev\peta;

use carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\comdev\peta\Peta;
use Illuminate\Http\Request;

class PetaController extends Controller
{
    public function index()
    {
        $list_peta = Peta::all()->map(function($peta) {
            $peta->formatted_tanggal_upload = Carbon::parse($peta->tanggal_upload)->translatedFormat('d F Y');
            return $peta;
        });
        return view('comdev.peta.index', compact('list_peta'));
    }


    public function create()
    {
        return view('comdev.peta.create');
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

        return redirect('comdev/peta')->with('create', 'Data peta berhasil ditambahkan.');
    }


    public function edit($id)
    {
    $peta = Peta::findOrFail($id);
    return view('comdev.peta.edit', compact('peta'));
    }





    public function update(Request $request, $id)
    {
        $peta = Peta::findOrFail($id);
        $peta->judul_peta = $request->judul_peta;
        $peta->tanggal_upload = $request->tanggal_upload;
        $peta->save();
        if(request('file_foto')) $peta->handleUploadFoto();

        return redirect('comdev/peta')->with('update', 'Data peta berhasil diupdate.');
    }

    public function destroy($id)
    {
        $peta = Peta::findOrFail($id);
        $peta->handleDeleteFoto();
        $peta->delete();

        return redirect('comdev/peta')->with('delete', 'Data peta berhasil dihapus.');
    }


    public function show($id)
    {
        $peta = peta::findOrFail($id);
        return view('comdev.peta.show', compact('peta'));
    }

    function batal(){
        return redirect('comdev/peta');
    }

}
