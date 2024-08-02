<?php

namespace App\Http\Controllers\Comdev\Peta;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Comdev\Peta\Peta;
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
            'judul_peta' => 'required|string|max:255',
            'tanggal_upload' => 'required|date',
            // 'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'judul_peta.required' => 'Field Judul Peta wajib diisi.',
            'judul_peta.string' => 'Field Judul Peta harus berupa string.',
            'judul_peta.max' => 'Field Judul Peta tidak boleh lebih dari 255 karakter.',
            'tanggal_upload.required' => 'Field Tanggal Upload wajib diisi.',
            'tanggal_upload.date' => 'Field Tanggal Upload harus berupa tanggal yang valid.',
            'file_foto.required' => 'Field File Foto wajib diisi.',
            'file_foto.image' => 'Field File Foto harus berupa gambar.',
            'file_foto.mimes' => 'Field File Foto harus berupa gambar dengan format jpeg, png, jpg, atau gif.',
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

        $request->validate([
            'judul_peta' => 'required|string|max:255',
            'tanggal_upload' => 'required|date',
            // 'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'judul_peta.required' => 'Field Judul Peta wajib diisi.',
            'judul_peta.string' => 'Field Judul Peta harus berupa string.',
            'judul_peta.max' => 'Field Judul Peta tidak boleh lebih dari 255 karakter.',
            'tanggal_upload.required' => 'Field Tanggal Upload wajib diisi.',
            'tanggal_upload.date' => 'Field Tanggal Upload harus berupa tanggal yang valid.',
            // 'file_foto.image' => 'Field File Foto harus berupa gambar.',
            // 'file_foto.mimes' => 'Field File Foto harus berupa gambar dengan format jpeg, png, jpg, atau gif.',
        ]);

        $peta->judul_peta = $request->judul_peta;
        $peta->tanggal_upload = $request->tanggal_upload;

        if ($request->hasFile('file_foto')) {
            $peta->handleUploadFoto();
        }

        $peta->save();

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
        $peta = Peta::findOrFail($id);
        return view('comdev.peta.show', compact('peta'));
    }

    public function batal()
    {
        return redirect('comdev/peta');
    }
}
