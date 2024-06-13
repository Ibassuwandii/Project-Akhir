<?php

namespace App\Http\Controllers\edukasi\Tamanbaca;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\edukasi\tamanbaca\Tamanbaca;

class TamanbacaController extends Controller
{
    public function index()
    {
        $list_tamanbaca = Tamanbaca::all()->map(function($tamanbaca) {
            $tamanbaca->formatted_bulan_pengunjung = Carbon::parse($tamanbaca->bulan_pengunjung)->translatedFormat('d F Y');
            $tamanbaca->formatted_bulan_pinjam = Carbon::parse($tamanbaca->bulan_pinjam)->translatedFormat('d F Y');
            return $tamanbaca;
        });
        return view('edukasi.tamanbaca.index', compact('list_tamanbaca'));
    }

    public function create()
    {
        return view('edukasi.tamanbaca.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_buku' => 'required',
            'total_buku' => 'required',
            'bulan_pengunjung' => 'required',
            'total_pengunjung' => 'required',
            'bulan_pinjam' => 'required',
            'total_pinjam' => 'required',
        ]);

        $tamanbaca = new Tamanbaca;
        $tamanbaca->jenis_buku = $request->jenis_buku;
        $tamanbaca->total_buku = $request->total_buku;
        $tamanbaca->bulan_pengunjung = $request->bulan_pengunjung;
        $tamanbaca->total_pengunjung = $request->total_pengunjung;
        $tamanbaca->bulan_pinjam = $request->bulan_pinjam;
        $tamanbaca->total_pinjam = $request->total_pinjam;
        $tamanbaca->save();

        return redirect('edukasi/tamanbaca')->with('success', 'Data tamanbaca berhasil disimpan.');
    }

    public function edit($id)
    {
        $tamanbaca = Tamanbaca::findOrFail($id);
        return view('edukasi.tamanbaca.edit', compact('tamanbaca'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_buku' => 'required',
            'total_buku' => 'required',
            'bulan_pengunjung' => 'required',
            'total_pengunjung' => 'required',
            'bulan_pinjam' => 'required',
            'total_pinjam' => 'required',
        ]);

        $tamanbaca = Tamanbaca::findOrFail($id);
        $tamanbaca->jenis_buku = $request->jenis_buku;
        $tamanbaca->total_buku = $request->total_buku;
        $tamanbaca->bulan_pengunjung = $request->bulan_pengunjung;
        $tamanbaca->total_pengunjung = $request->total_pengunjung;
        $tamanbaca->bulan_pinjam = $request->bulan_pinjam;
        $tamanbaca->total_pinjam = $request->total_pinjam;
        $tamanbaca->save();

        return redirect('edukasi/tamanbaca')->with('update', 'Data tamanbaca berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $tamanbaca = Tamanbaca::findOrFail($id);
        $tamanbaca->delete();
        return redirect('edukasi/tamanbaca')->with('delete', 'Data tamanbaca berhasil dihapus.');
    }

    public function show($id)
    {
        $tamanbaca = Tamanbaca::findOrFail($id);
        return view('edukasi.tamanbaca.show', compact('tamanbaca'));
    }

    public function batal()
    {
        return redirect('edukasi/tamanbaca');
    }
}
