<?php

namespace App\Http\Controllers\edukasi\Visitschool;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\edukasi\visitschool\Visitschool;

class VisitschoolController extends Controller
{
    public function index()
    {
        $list_visitschool = Visitschool::all();
        return view('edukasi.visitschool.index', compact('list_visitschool'));
    }

    public function create()
    {
        return view('edukasi.visitschool.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required',
            'lokasi' => 'required',
            'laki_laki' => 'required',
            'perempuan' => 'required',
            'tanggal' => 'required',
            'materi' => 'required',
        ]);

        $visitschool = new visitschool;
        $visitschool->nama_sekolah = $request->nama_sekolah;
        $visitschool->lokasi = $request->lokasi;
        $visitschool->laki_laki = $request->laki_laki;
        $visitschool->perempuan = $request->perempuan;
        $visitschool->tanggal = $request->tanggal;
        $visitschool->materi = $request->materi;
        $visitschool->save();

        return redirect('edukasi/visitschool')->with('success', 'Data visitschool berhasil disimpan.');
    }

    public function edit($id)
    {
        $visitschool = Visitschool::findOrFail($id);
        return view('edukasi.visitschool.edit', compact('visitschool'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_sekolah' => 'required',
            'lokasi' => 'required',
            'laki_laki' => 'required',
            'perempuan' => 'required',
            'tanggal' => 'required',
            'materi' => 'required',
        ]);

        $visitschool = Visitschool::findOrFail($id);
        $visitschool->nama_sekolah = $request->nama_sekolah;
        $visitschool->lokasi = $request->lokasi;
        $visitschool->laki_laki = $request->laki_laki;
        $visitschool->perempuan = $request->perempuan;
        $visitschool->tanggal = $request->tanggal;
        $visitschool->materi = $request->materi;
        $visitschool->save();

        return redirect('edukasi/visitschool')->with('update', 'Data visitschool berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $visitschool = Visitschool::findOrFail($id);
        $visitschool->delete();
        return redirect('edukasi/visitschool')->with('delete', 'Data visitschool berhasil dihapus.');
    }

    public function show($id)
    {
        $visitschool = Visitschool::findOrFail($id);
        return view('edukasi.visitschool.show', compact('visitschool'));
    }

    public function batal()
    {
        return redirect('edukasi/visitschool');
    }
}
