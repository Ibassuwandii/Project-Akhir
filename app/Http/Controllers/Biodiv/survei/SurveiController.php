<?php

namespace App\Http\Controllers\biodiv\survei;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\biodiv\survei\Survei;
use Carbon\Carbon;

class SurveiController extends Controller
{
    public function index()
    {
        $list_survei = survei::all()->map(function ($survei) {
            $survei->formatted_bulan = Carbon::parse($survei->bulan)->Format('F Y');
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
            'bulan' => 'required',
            'taxa' => 'required',
            'species' => 'required',
            'english_name' => 'required',
            // 'daftar_merah' => 'required',
            // 'law' => 'required',
            'observation' => 'required',
        ], [
            'bulan.required' => 'bulan tidak boleh kosong.',
            'taxa.required' => 'taxa tidak boleh kosong.',
            'species.required' => 'species tidak boleh kosong.',
            'english_name.required' => 'English Name tidak boleh kosong.',
            'daftar_merah.required' => 'IUCN Red List Status tidak boleh kosong.',
            'law.required' => 'Protected by Indonesia Law tidak boleh kosong.',
            'observation.required' => 'Observations tidak boleh kosong.',
        ]);

        $survei = new survei;
        $survei->bulan = $request->bulan;
        $survei->taxa = $request->taxa;
        $survei->species = $request->species;
        $survei->english_name = $request->english_name;
        $survei->daftar_merah = $request->daftar_merah;
        $survei->law = $request->law;
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
            'bulan' => 'required',
            'taxa' => 'required',
            'species' => 'required',
            'english_name' => 'required',
            'daftar_merah' => 'required',
            // 'law' => 'required',
            'observation' => 'required',
        ], [
            'bulan.required' => 'bulan tidak boleh kosong.',
            'taxa.required' => 'taxa tidak boleh kosong.',
            'species.required' => 'species tidak boleh kosong.',
            'english_name.required' => 'English Name  tidak boleh kosong.',
            'daftar_merah.required' => 'IUCN Red List Status tidak boleh kosong.',
            'law.required' => 'Protected by Indonesia Law tidak boleh kosong.',
            'observation.required' => 'Observations tidak boleh kosong.',
        ]);

        $survei = Survei::findOrFail($id);
        $survei->bulan = $request->bulan;
        $survei->taxa = $request->taxa;
        $survei->species = $request->species;
        $survei->english_name = $request->english_name;
        $survei->daftar_merah = $request->daftar_merah;
        $survei->law = $request->law;
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