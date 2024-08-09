<?php

namespace App\Http\Controllers\Comdev\site_sk;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Karhutla;
use Illuminate\Http\Request;
use Carbon\Carbon;

class KarhutlaController extends Controller
{
    public function index()
    {
        $list_karhutla = Karhutla::all()->map(function ($karhutla) {
            $karhutla->formatted_tanggal_patroli = Carbon::parse($karhutla->tanggal_patroli)->format('d-m-Y');
            return $karhutla;
        });
        return view('comdev.site_sk.karhutla.index', ['list_karhutla' => $list_karhutla]);
    }

    public function create()
    {
        return view('comdev.site_sk.karhutla.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jangkauan_patroli' => 'required',
            'tanggal_patroli' => 'required|date',
            'titik_koordinat' => 'required',
            'luas_lahan' => 'required',
            'pemilik_lahan' => 'required',
            'jumlah_patroli' => 'required|numeric',
            'sosialisasi' => 'required',
            'file_foto.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'jangkauan_patroli.required' => 'Field Jangkauan Patroli wajib diisi.',
            'tanggal_patroli.required' => 'Field Tanggal Patroli wajib diisi.',
            'tanggal_patroli.date' => 'Field Tanggal Patroli harus berupa tanggal yang valid.',
            'titik_koordinat.required' => 'Field Titik Koordinat wajib diisi.',
            'luas_lahan.required' => 'Field Luas Lahan wajib diisi.',
            'pemilik_lahan.required' => 'Field Pemilik Lahan wajib diisi.',
            'jumlah_patroli.required' => 'Field Jumlah Patroli wajib diisi.',
            'jumlah_patroli.numeric' => 'Field Jumlah Patroli harus berupa angka.',
            'sosialisasi.required' => 'Field Sosialisasi wajib diisi.',
            'file_foto.*.image' => 'File harus berupa gambar.',
            'file_foto.*.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, atau gif.',
            'file_foto.*.max' => 'Ukuran file tidak boleh lebih dari 2048 KB.',
        ]);

        $karhutla = new Karhutla;
        $karhutla->jangkauan_patroli = $request->jangkauan_patroli;
        $karhutla->tanggal_patroli = $request->tanggal_patroli;
        $karhutla->titik_koordinat = $request->titik_koordinat;
        $karhutla->luas_lahan = $request->luas_lahan;
        $karhutla->pemilik_lahan = $request->pemilik_lahan;
        $karhutla->jumlah_patroli = $request->jumlah_patroli;
        $karhutla->sosialisasi = $request->sosialisasi;

        $karhutla->handleUploadFoto();
        $karhutla->save();

        return redirect('comdev/site_sk/karhutla')->with('create', 'Data karhutla berhasil ditambahkan.');
    }

    public function edit(Karhutla $karhutla)
    {
        $data['karhutla'] = $karhutla;
        return view('comdev.site_sk.karhutla.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jangkauan_patroli' => 'required',
            'tanggal_patroli' => 'required|date',
            'titik_koordinat' => 'required',
            'luas_lahan' => 'required',
            'pemilik_lahan' => 'required',
            'jumlah_patroli' => 'required|numeric',
            'sosialisasi' => 'required',
            'file_foto.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'jangkauan_patroli.required' => 'Field Jangkauan Patroli wajib diisi.',
            'tanggal_patroli.required' => 'Field Tanggal Patroli wajib diisi.',
            'tanggal_patroli.date' => 'Field Tanggal Patroli harus berupa tanggal yang valid.',
            'titik_koordinat.required' => 'Field Titik Koordinat wajib diisi.',
            'luas_lahan.required' => 'Field Luas Lahan wajib diisi.',
            'pemilik_lahan.required' => 'Field Pemilik Lahan wajib diisi.',
            'jumlah_patroli.required' => 'Field Jumlah Patroli wajib diisi.',
            'jumlah_patroli.numeric' => 'Field Jumlah Patroli harus berupa angka.',
            'sosialisasi.required' => 'Field Sosialisasi wajib diisi.',
            'file_foto.*.image' => 'File harus berupa gambar.',
            'file_foto.*.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, atau gif.',
            'file_foto.*.max' => 'Ukuran file tidak boleh lebih dari 2048 KB.',
        ]);

        $karhutla = Karhutla::findOrFail($id);
        $karhutla->jangkauan_patroli = $request->jangkauan_patroli;
        $karhutla->tanggal_patroli = $request->tanggal_patroli;
        $karhutla->titik_koordinat = $request->titik_koordinat;
        $karhutla->luas_lahan = $request->luas_lahan;
        $karhutla->pemilik_lahan = $request->pemilik_lahan;
        $karhutla->jumlah_patroli = $request->jumlah_patroli;
        $karhutla->sosialisasi = $request->sosialisasi;

        if ($request->hasFile('file_foto')) {
            $karhutla->handleUploadFoto();
        }

        $karhutla->save();

        return redirect('comdev/site_sk/karhutla')->with('update', 'Data karhutla berhasil diupdate.');
    }

    public function show($id)
    {

        $karhutla = Karhutla::findOrFail($id);
        $karhutla->formatted_tanggal_patroli = Carbon::parse($karhutla->tanggal_patroli)->translatedFormat('j F Y');

        return view('comdev.site_sk.karhutla.show', compact('karhutla'));
    }

    public function destroy(Karhutla $karhutla)
    {
        $karhutla->delete();
        $karhutla->handleDeleteFoto();
        return redirect()->back()->with('delete', 'Data karhutla berhasil dihapus.');
    }

    public function batal()
    {
        return redirect('comdev/site_sk/karhutla');
    }
}