<?php

namespace App\Http\Controllers\Comdev\site_pgsb;

use carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\comdev\site_pgsb\Tpom;
use Illuminate\Http\Request;

class PgsbTpomController extends Controller
{
    public function index()
    {
        $list_tpom = tpom::all()->map(function($tpom) {
            $tpom->formatted_tanggal_patroli = Carbon::parse($tpom->tanggal_patroli)->translatedFormat('d F Y');
            return $tpom;
        });
        return view('comdev.site_pgsb.tpom.index', compact('list_tpom'));
    }


    public function create()
    {
        return view('comdev.site_pgsb.tpom.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jangkauan_patroli' => 'required',
            'tanggal_patroli' => 'required',
            'titik_koordinat' => 'required',
            'luas_lahan' => 'required',
            'pemilik_lahan' => 'required',
            'jumlah_patroli' => 'required',
            'sosialisasi' => 'required',
            // 'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan persyaratan Anda
        ]);

        $tpom = new Tpom;
        $tpom->jangkauan_patroli = $request->jangkauan_patroli; // Perbaikan penulisan
        $tpom->tanggal_patroli = $request->tanggal_patroli;
        $tpom->titik_koordinat = $request->titik_koordinat;
        $tpom->luas_lahan = $request->luas_lahan;
        $tpom->pemilik_lahan = $request->pemilik_lahan;
        $tpom->jumlah_patroli = $request->jumlah_patroli;
        $tpom->sosialisasi = $request->sosialisasi;

        $tpom->handleUploadFoto();
        $tpom->save();

        return redirect('comdev/site_pgsb/tpom')->with('create', 'Data Berhasilahkan'); // Redirect ke index
    }


    public function edit( Tpom $tpom)
    {
        $data['tpom'] = $tpom;
        return view('comdev.site_pgsb.tpom.edit', $data);
    }



    public function update(Request $request, $id)
    {
        $tpom = Tpom::findOrFail($id);

        $tpom->jangkauan_patroli = $request->jangkauan_patroli; // Perbaikan penulisan
        $tpom->tanggal_patroli = $request->tanggal_patroli;
        $tpom->titik_koordinat = $request->titik_koordinat;
        $tpom->luas_lahan = $request->luas_lahan;
        $tpom->pemilik_lahan = $request->pemilik_lahan;
        $tpom->jumlah_patroli = $request->jumlah_patroli;
        $tpom->sosialisasi = $request->sosialisasi;

        $tpom->save();
        if(request('file_foto')) $tpom->handleUploadFoto();
        return redirect('comdev/site_pgsb/tpom')->with('update', 'Data Berhasilahkan');// Redirect ke index
    }


    public function show($id)
    {
        $tpom = Tpom::findOrFail($id); // Ambil data tpom berdasarkan ID

        // Render view 'show' dan kirimkan data $tpom
        return view('comdev.site_pgsb.tpom.show', compact('tpom'));
    }

    public function destroy(Tpom $tpom)
    {
            $tpom->delete();
            $tpom->handleDeleteFoto();
            return redirect()->back()->with('success', 'Data tpom berhasil dihapus.');
    }



}
