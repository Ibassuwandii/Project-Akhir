<?php

namespace App\Http\Controllers\biodiv\antropogenik;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\biodiv\antropogenik\Antropogenik;
// use Carbon\Carbon;

class AntropogenikController extends Controller
{
    public function index()
    {
        $list_antropogenik = Antropogenik::all();
        $methods = Antropogenik::pluck('metode')->unique();
        $observasis = Antropogenik::pluck('observasi')->unique();
        $pengamatans = Antropogenik::pluck('pengamatan')->unique();
        $totalQuantity = $list_antropogenik->groupBy('bulan')->map->sum('kuantitas');

        return view('biodiv.antropogenik.index', compact('list_antropogenik', 'methods', 'observasis', 'pengamatans', 'totalQuantity'));
    }


    public function create()
    {
        return view('biodiv.antropogenik.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bulan' => 'required',
            'metode' => 'required|string',
            'observasi' => 'required|string',
            'pengamatan' => 'required|string',
            'kuantitas' => 'required|numeric',
        ], [
            'bulan.required' => 'Bulan tidak boleh kosong.',
            'metode.required' => 'Metode tidak boleh kosong.',
            'observasi.required' => 'Observasi tidak boleh kosong.',
            'pengamatan.required' => 'Pengamatan tidak boleh kosong.',
            'kuantitas.required' => 'Kuantitas tidak boleh kosong.',
        ]);

        $antropogenik = new Antropogenik;
        $antropogenik->bulan = $request->bulan;
        $antropogenik->metode = $request->metode;
        $antropogenik->observasi = $request->observasi;
        $antropogenik->pengamatan = $request->pengamatan;
        $antropogenik->kuantitas = $request->kuantitas;
        $antropogenik->save();

        return redirect('biodiv/antropogenik')->with('success', 'Data antropogenik berhasil disimpan.');
    }

    public function edit($id)
    {
        $antropogenik = Antropogenik::findOrFail($id);
        return view('biodiv.antropogenik.edit', compact('antropogenik'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'bulan' => 'required',
            'metode' => 'required|string',
            'observasi' => 'required|string',
            'pengamatan' => 'required|string',
            'kuantitas' => 'required|numeric',
        ], [
            'bulan.required' => 'Bulan tidak boleh kosong.',
            'metode.required' => 'Metode tidak boleh kosong.',
            'observasi.required' => 'Observasi tidak boleh kosong.',
            'pengamatan.required' => 'Pengamatan tidak boleh kosong.',
            'kuantitas.required' => 'Kuantitas tidak boleh kosong.',
        ]);

        $antropogenik = Antropogenik::findOrFail($id);
        $antropogenik->bulan = $request->bulan;
        $antropogenik->metode = $request->metode;
        $antropogenik->observasi = $request->observasi;
        $antropogenik->pengamatan = $request->pengamatan;
        $antropogenik->kuantitas = $request->kuantitas;
        $antropogenik->save();

        return redirect('biodiv/antropogenik')->with('update', 'Data antropogenik berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $antropogenik = Antropogenik::findOrFail($id);
        $antropogenik->delete();
        return redirect('biodiv/antropogenik')->with('delete', 'Data antropogenik berhasil dihapus.');
    }

    public function show($id)
    {
        $antropogenik = Antropogenik::findOrFail($id);
        return view('biodiv.antropogenik.show', compact('antropogenik'));
    }

    public function batal()
    {
        return redirect('biodiv/antropogenik');
    }
}
