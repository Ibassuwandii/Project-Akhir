<?php

namespace App\Http\Controllers\biodiv\survei;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\biodiv\survei\Survei;

class SurveiController extends Controller
{
    public function index()
    {
        $list_survei = Survei::all()->map(function ($survei) {
            return $survei;
        });
        return view('biodiv.survei.index', compact('list_survei'));
    }

    public function create()
    {
        return view('biodiv.survei.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'taxa' => 'required',
            'species' => 'required',
            'english_name' => 'required',
            'daftar_merah' => 'required',
            'observation' => 'required',
        ], [
            'taxa.required' => 'taxa tidak boleh kosong.',
            'species.required' => 'species tidak boleh kosong.',
            'english_name.required' => 'Tipe habitat tidak boleh kosong.',
            'daftar_merah.required' => 'Jumlah transek tidak boleh kosong.',
            'observation.required' => 'Total panjang tidak boleh kosong.',
        ]);

        $survei = new survei;
        $survei->taxa = $request->taxa;
        $survei->species = $request->species;
        $survei->english_name = $request->english_name;
        $survei->daftar_merah = $request->daftar_merah;
        $survei->observation = $request->observation;
        $survei->save();

        return redirect('biodiv/survei')->with('success', 'Data survei berhasil disimpan.');
    }

    public function edit($id)
    {
        $survei = Survei::findOrFail($id);
        return view('biodiv.survei.edit', compact('survei'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'taxa' => 'required',
            'species' => 'required',
            'english_name' => 'required',
            'daftar_merah' => 'required',
            'observation' => 'required',
        ], [
            'taxa.required' => 'taxa tidak boleh kosong.',
            'species.required' => 'species tidak boleh kosong.',
            'english_name.required' => 'Tipe habitat tidak boleh kosong.',
            'daftar_merah.required' => 'Jumlah transek tidak boleh kosong.',
            'observation.required' => 'Total panjang tidak boleh kosong.',
        ]);

        $survei = Survei::findOrFail($id);
        $survei->taxa = $request->taxa;
        $survei->species = $request->species;
        $survei->english_name = $request->english_name;
        $survei->daftar_merah = $request->daftar_merah;
        $survei->observation = $request->observation;
        $survei->save();

        return redirect('biodiv/survei')->with('update', 'Data survei berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $survei = Survei::findOrFail($id);
        $survei->delete();

        return redirect('biodiv/survei')->with('delete', 'Data survei berhasil dihapus.');
    }

    public function show($id)
    {
        $survei = Survei::findOrFail($id);
        return view('biodiv.survei.show', compact('survei'));
    }

    public function batal()
    {
        return redirect('biodiv/survei');
    }
}
