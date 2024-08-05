<?php

namespace App\Http\Controllers\biodiv\orangutan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\biodiv\orangutan\Orangutan;

class OrangutanController extends Controller
{
    public function index()
    {
        $list_orangutan = Orangutan::all()->map(function ($orangutan) {
            return $orangutan;
        });
        return view('biodiv.orangutan.index', compact('list_orangutan'));
    }

    public function create()
    {
        return view('biodiv.orangutan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'lokasi' => 'required',
            'tipe_habitat' => 'required',
            'jumlah_transek' => 'required',
            'total_panjang' => 'required',
            'jumlah_sarang' => 'required',
            'kepadatan' => 'required',
        ], [
            'tanggal.required' => 'Tanggal tidak boleh kosong.',
            'tanggal.date_format' => 'Format tanggal harus YYYY-MM.',
            'lokasi.required' => 'Lokasi tidak boleh kosong.',
            'tipe_habitat.required' => 'Tipe habitat tidak boleh kosong.',
            'jumlah_transek.required' => 'Jumlah transek tidak boleh kosong.',
            'total_panjang.required' => 'Total panjang tidak boleh kosong.',
            'jumlah_sarang.required' => 'Jumlah sarang tidak boleh kosong.',
            'kepadatan.required' => 'Kepadatan tidak boleh kosong.',
        ]);

        $orangutan = new Orangutan;
        $orangutan->tanggal = $request->tanggal;
        $orangutan->lokasi = $request->lokasi;
        $orangutan->tipe_habitat = $request->tipe_habitat;
        $orangutan->jumlah_transek = $request->jumlah_transek;
        $orangutan->total_panjang = $request->total_panjang;
        $orangutan->jumlah_sarang = $request->jumlah_sarang;
        $orangutan->kepadatan = $request->kepadatan;
        $orangutan->save();

        return redirect('biodiv/orangutan')->with('success', 'Data orangutan berhasil disimpan.');
    }

    public function edit($id)
    {
        $orangutan = Orangutan::findOrFail($id);
        return view('biodiv.orangutan.edit', compact('orangutan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'lokasi' => 'required',
            'tipe_habitat' => 'required',
            'jumlah_transek' => 'required',
            'total_panjang' => 'required',
            'jumlah_sarang' => 'required',
            'kepadatan' => 'required',
        ], [
            'tanggal.required' => 'Tanggal tidak boleh kosong.',
            'lokasi.required' => 'Lokasi tidak boleh kosong.',
            'tipe_habitat.required' => 'Tipe habitat tidak boleh kosong.',
            'jumlah_transek.required' => 'Jumlah transek tidak boleh kosong.',
            'total_panjang.required' => 'Total panjang tidak boleh kosong.',
            'jumlah_sarang.required' => 'Jumlah sarang tidak boleh kosong.',
            'kepadatan.required' => 'Kepadatan tidak boleh kosong.',
        ]);

        $orangutan = Orangutan::findOrFail($id);
        $orangutan->tanggal = $request->tanggal;
        $orangutan->lokasi = $request->lokasi;
        $orangutan->tipe_habitat = $request->tipe_habitat;
        $orangutan->jumlah_transek = $request->jumlah_transek;
        $orangutan->total_panjang = $request->total_panjang;
        $orangutan->jumlah_sarang = $request->jumlah_sarang;
        $orangutan->kepadatan = $request->kepadatan;
        $orangutan->save();

        return redirect('biodiv/orangutan')->with('update', 'Data orangutan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $orangutan = Orangutan::findOrFail($id);
        $orangutan->delete();

        return redirect('biodiv/orangutan')->with('delete', 'Data orangutan berhasil dihapus.');
    }

    public function show($id)
    {
        $orangutan = Orangutan::findOrFail($id);
        return view('biodiv.orangutan.show', compact('orangutan'));
    }

    public function batal()
    {
        return redirect('biodiv/orangutan');
    }
}
