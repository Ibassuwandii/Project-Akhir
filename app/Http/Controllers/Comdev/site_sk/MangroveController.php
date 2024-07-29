<?php

namespace App\Http\Controllers\Comdev\site_sk;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Mangrove;
use Illuminate\Http\Request;

class MangroveController extends Controller
{
    public function index()
    {
        $list_mangrove = Mangrove::all()->map(function($mangrove) {
            $mangrove->formatted_tanggal = Carbon::parse($mangrove->tanggal)->translatedFormat('d F Y');
            return $mangrove;
        });
        return view('comdev.site_sk.mangrove.index', compact('list_mangrove'));
    }

    public function create()
    {
        return view('comdev.site_sk.mangrove.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'semester' => 'required',
            'bibit_disemai' => 'required|numeric',
            'bibit_hidup' => 'required|numeric',
            'bibit_mati' => 'required|numeric',
            'tanggal' => 'required|date',
            'keterangan' => 'required',
            'file_foto.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'semester.required' => 'Field Semester wajib diisi.',
            'bibit_disemai.required' => 'Field Bibit Disemai wajib diisi.',
            'bibit_disemai.numeric' => 'Field Bibit Disemai harus berupa angka.',
            'bibit_hidup.required' => 'Field Bibit Hidup wajib diisi.',
            'bibit_hidup.numeric' => 'Field Bibit Hidup harus berupa angka.',
            'bibit_mati.required' => 'Field Bibit Mati wajib diisi.',
            'bibit_mati.numeric' => 'Field Bibit Mati harus berupa angka.',
            'tanggal.required' => 'Field Tanggal wajib diisi.',
            'tanggal.date' => 'Field Tanggal harus berupa tanggal yang valid.',
            'keterangan.required' => 'Field Keterangan wajib diisi.',
            'file_foto.*.image' => 'File harus berupa gambar.',
            'file_foto.*.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, atau gif.',
            'file_foto.*.max' => 'Ukuran file tidak boleh lebih dari 2048 KB.',
        ]);

        $mangrove = new Mangrove;
        $mangrove->semester = $request->semester;
        $mangrove->bibit_disemai = $request->bibit_disemai;
        $mangrove->bibit_hidup = $request->bibit_hidup;
        $mangrove->bibit_mati = $request->bibit_mati;
        $mangrove->tanggal = $request->tanggal;
        $mangrove->keterangan = $request->keterangan;

        $mangrove->handleUploadFoto();
        $mangrove->save();

        return redirect('comdev/site_sk/mangrove')->with('create', 'Data mangrove berhasil ditambahkan.');
    }

    public function edit(Mangrove $mangrove)
    {
        $data['mangrove'] = $mangrove;
        return view('comdev.site_sk.mangrove.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'semester' => 'required',
            'bibit_disemai' => 'required|numeric',
            'bibit_hidup' => 'required|numeric',
            'bibit_mati' => 'required|numeric',
            'tanggal' => 'required|date',
            'keterangan' => 'required',
            'file_foto.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'semester.required' => 'Field Semester wajib diisi.',
            'bibit_disemai.required' => 'Field Bibit Disemai wajib diisi.',
            'bibit_disemai.numeric' => 'Field Bibit Disemai harus berupa angka.',
            'bibit_hidup.required' => 'Field Bibit Hidup wajib diisi.',
            'bibit_hidup.numeric' => 'Field Bibit Hidup harus berupa angka.',
            'bibit_mati.required' => 'Field Bibit Mati wajib diisi.',
            'bibit_mati.numeric' => 'Field Bibit Mati harus berupa angka.',
            'tanggal.required' => 'Field Tanggal wajib diisi.',
            'tanggal.date' => 'Field Tanggal harus berupa tanggal yang valid.',
            'keterangan.required' => 'Field Keterangan wajib diisi.',
            'file_foto.*.image' => 'File harus berupa gambar.',
            'file_foto.*.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, atau gif.',
            'file_foto.*.max' => 'Ukuran file tidak boleh lebih dari 2048 KB.',
        ]);

        $mangrove = Mangrove::findOrFail($id);
        $mangrove->semester = $request->semester;
        $mangrove->bibit_disemai = $request->bibit_disemai;
        $mangrove->bibit_hidup = $request->bibit_hidup;
        $mangrove->bibit_mati = $request->bibit_mati;
        $mangrove->tanggal = $request->tanggal;
        $mangrove->keterangan = $request->keterangan;

        $mangrove->save();
        if ($request->hasFile('file_foto')) {
            $mangrove->handleUploadFoto();
        }

        return redirect('comdev/site_sk/mangrove')->with('update', 'Data mangrove berhasil diperbarui.');
    }

    public function show($id)
    {
        $mangrove = Mangrove::findOrFail($id);
        return view('comdev.site_sk.mangrove.show', compact('mangrove'));
    }

    public function destroy(Mangrove $mangrove)
    {
        $mangrove->delete();
        $mangrove->handleDeleteFoto();
        return redirect()->back()->with('delete', 'Data mangrove berhasil dihapus.');
    }

    public function batal()
    {
        return redirect('comdev/site_sk/mangrove');
    }
}
