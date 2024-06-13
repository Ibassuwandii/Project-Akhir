<?php

namespace App\Http\Controllers\edukasi\Aksisampah;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\edukasi\aksisampah\Aksisampah;

class AksisampahController extends Controller
{
    public function index()
    {
        $list_aksisampah = aksisampah::all()->map(function($aksisampah) {
            $aksisampah->formatted_tanggal = Carbon::parse($aksisampah->tanggal)->translatedFormat('d F Y');
            return $aksisampah;
        });
        return view('edukasi.aksisampah.index', compact('list_aksisampah'));
    }

    public function create()
    {
        return view('edukasi.aksisampah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required',
            'jumlah_peserta' => 'required',
            'tanggal' => 'required',
            'jenis_sampah' => 'required',
            'jumlah_sampah' => 'required',
            'instansi' => 'required',
        ]);

        $aksisampah = new Aksisampah;
        $aksisampah->lokasi = $request->lokasi;
        $aksisampah->jumlah_peserta = $request->jumlah_peserta;
        $aksisampah->tanggal = $request->tanggal;
        $aksisampah->jenis_sampah = $request->jenis_sampah;
        $aksisampah->jumlah_sampah = $request->jumlah_sampah;
        $aksisampah->instansi = $request->instansi;
        $aksisampah->save();

        return redirect('edukasi/aksisampah')->with('success', 'Data aksisampah berhasil disimpan.');
    }

    public function edit($id)
    {
        $aksisampah = Aksisampah::findOrFail($id);
        return view('edukasi.aksisampah.edit', compact('aksisampah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'lokasi' => 'required',
            'jumlah_peserta' => 'required',
            'tanggal' => 'required',
            'jenis_sampah' => 'required',
            'jumlah_sampah' => 'required',
            'instansi' => 'required',
        ]);

        $aksisampah = Aksisampah::findOrFail($id);
        $aksisampah->lokasi = $request->lokasi;
        $aksisampah->jumlah_peserta = $request->jumlah_peserta;
        $aksisampah->tanggal = $request->tanggal;
        $aksisampah->jenis_sampah = $request->jenis_sampah;
        $aksisampah->jumlah_sampah = $request->jumlah_sampah;
        $aksisampah->instansi = $request->instansi;
        $aksisampah->save();

        return redirect('edukasi/aksisampah')->with('update', 'Data aksisampah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $aksisampah = Aksisampah::findOrFail($id);
        $aksisampah->delete();
        return redirect('edukasi/aksisampah')->with('delete', 'Data aksisampah berhasil dihapus.');
    }

    public function show($id)
    {
        $aksisampah = Aksisampah::findOrFail($id);
        return view('edukasi.aksisampah.show', compact('aksisampah'));
    }

    public function batal()
    {
        return redirect('edukasi/aksisampah');
    }
}
