<?php

namespace App\Http\Controllers\Comdev\site_sk;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Tpom;
use Illuminate\Http\Request;
use Carbon\Carbon;


class TpomController extends Controller
{
    public function index()
    {
        $list_tpom = Tpom::all()->map(function ($tpom) {
            $tpom->formatted_tanggal_patroli = Carbon::parse($tpom->tanggal_patroli)->format('d-m-Y');
            return $tpom;
        });
        return view('comdev.site_sk.tpom.index', ['list_tpom' => $list_tpom]);
    }
    public function create()
    {
        return view('comdev.site_sk.tpom.create');
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

        $tpom = new Tpom;
        $tpom->jangkauan_patroli = $request->jangkauan_patroli;
        $tpom->tanggal_patroli = $request->tanggal_patroli;
        $tpom->titik_koordinat = $request->titik_koordinat;
        $tpom->luas_lahan = $request->luas_lahan;
        $tpom->pemilik_lahan = $request->pemilik_lahan;
        $tpom->jumlah_patroli = $request->jumlah_patroli;
        $tpom->sosialisasi = $request->sosialisasi;

        $tpom->handleUploadFoto();
        $tpom->save();

        return redirect('comdev/site_sk/tpom')->with('create', 'Data TPOM berhasil ditambahkan.');
    }

    public function edit(Tpom $tpom)
    {
        $data['tpom'] = $tpom;
        return view('comdev.site_sk.tpom.edit', $data);
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

        $tpom = Tpom::findOrFail($id);
        $tpom->jangkauan_patroli = $request->jangkauan_patroli;
        $tpom->tanggal_patroli = $request->tanggal_patroli;
        $tpom->titik_koordinat = $request->titik_koordinat;
        $tpom->luas_lahan = $request->luas_lahan;
        $tpom->pemilik_lahan = $request->pemilik_lahan;
        $tpom->jumlah_patroli = $request->jumlah_patroli;
        $tpom->sosialisasi = $request->sosialisasi;

        $tpom->save();
        if ($request->hasFile('file_foto')) {
            $tpom->handleUploadFoto();
        }

        return redirect('comdev/site_sk/tpom')->with('update', 'Data TPOM berhasil diperbarui.');
    }

    public function show($id)
    {

        $tpom = Tpom::findOrFail($id);
        $tpom->formatted_tanggal_patroli = Carbon::parse($tpom->tanggal_patroli)->translatedFormat('j F Y');

        return view('comdev.site_sk.tpom.show', compact('tpom'));
    }

    public function destroy(Tpom $tpom)
    {
        $tpom->handleDeleteFoto();
        $tpom->delete();
        return redirect()->back()->with('delete', 'Data TPOM berhasil dihapus.');
    }

    public function batal()
    {
        return redirect('comdev/site_sk/tpom');
    }
}
