<?php

namespace App\Http\Controllers\edukasi\Instagram;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\edukasi\instagram\Instagram;

class InstagramController extends Controller
{
    public function index()
    {
        $list_instagram = Instagram::all();
        return view('edukasi.instagram.index', compact('list_instagram'));
    }

    public function create()
    {
        return view('edukasi.instagram.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_postingan' => 'required',
            'jumlah_folower' => 'required',
            'bulan' => 'required',
            'penayangan' => 'required',
            'like' => 'required',
            'coment' => 'required',
            'share' => 'required',
        ]);

        $instagram = new Instagram;
        $instagram->jenis_postingan = $request->jenis_postingan;
        $instagram->jumlah_folower = $request->jumlah_folower;
        $instagram->bulan = $request->bulan;
        $instagram->penayangan = $request->penayangan;
        $instagram->like = $request->like;
        $instagram->coment = $request->coment;
        $instagram->share = $request->share;
        $instagram->save();

        return redirect('edukasi/instagram')->with('success', 'Data instagram berhasil disimpan.');
    }

    public function edit($id)
    {
        $instagram = Instagram::findOrFail($id);
        return view('edukasi.instagram.edit', compact('instagram'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_postingan' => 'required',
            'jumlah_folower' => 'required',
            'bulan' => 'required',
            'penayangan' => 'required',
            'like' => 'required',
            'coment' => 'required',
            'share' => 'required',
        ]);

        $instagram = Instagram::findOrFail($id);
        $instagram->jenis_postingan = $request->jenis_postingan;
        $instagram->jumlah_folower = $request->jumlah_folower;
        $instagram->bulan = $request->bulan;
        $instagram->penayangan = $request->penayangan;
        $instagram->like = $request->like;
        $instagram->coment = $request->coment;
        $instagram->share = $request->share;
        $instagram->save();

        return redirect('edukasi/instagram')->with('update', 'Data instagram berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $instagram = Instagram::findOrFail($id);
        $instagram->delete();
        return redirect('edukasi/instagram')->with('delete', 'Data instagram berhasil dihapus.');
    }

    public function show($id)
    {
        $instagram = Instagram::findOrFail($id);
        return view('edukasi.instagram.show', compact('instagram'));
    }

    public function batal()
    {
        return redirect('edukasi/instagram');
    }
}
