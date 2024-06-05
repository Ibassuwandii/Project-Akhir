<?php

namespace App\Http\Controllers\Comdev\site_sk;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Karhutla;
use Illuminate\Http\Request;

class KarhutlaController extends Controller
{
    public function index()
    {
        $data['list_karhutla'] = Karhutla::all();
        return view('comdev.site_sk.karhutla.index',$data);
    }


    public function create()
    {
        return view('comdev.site_sk.karhutla.create');
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

        $karhutla = new Karhutla;
        $karhutla->jangkauan_patroli = $request->jangkauan_patroli; // Perbaikan penulisan
        $karhutla->tanggal_patroli = $request->tanggal_patroli;
        $karhutla->titik_koordinat = $request->titik_koordinat;
        $karhutla->luas_lahan = $request->luas_lahan;
        $karhutla->pemilik_lahan = $request->pemilik_lahan;
        $karhutla->jumlah_patroli = $request->jumlah_patroli;
        $karhutla->sosialisasi = $request->sosialisasi;

        $karhutla->handleUploadFoto();
        $karhutla->save();

        return redirect('comdev/site_sk/karhutla')->with('create', 'Data karhutla berhasil ditambahkan.');
    }

    public function edit( Karhutla $karhutla)
    {
        $data['karhutla'] = $karhutla;
        return view('comdev/site_sk/karhutla/edit', $data);
    }




    public function update(Request $request, $id)
    {
        $karhutla = Karhutla::findOrFail($id);

        $karhutla->jangkauan_patroli = $request->jangkauan_patroli; // Perbaikan penulisan
        $karhutla->tanggal_patroli = $request->tanggal_patroli;
        $karhutla->titik_koordinat = $request->titik_koordinat;
        $karhutla->luas_lahan = $request->luas_lahan;
        $karhutla->pemilik_lahan = $request->pemilik_lahan;
        $karhutla->jumlah_patroli = $request->jumlah_patroli;
        $karhutla->sosialisasi = $request->sosialisasi;


        $karhutla->save();
        if(request('file_foto')) $karhutla->handleUploadFoto();
        return redirect('comdev/site_sk/karhutla'); // Redirect ke index

        return redirect('comdev/site_sk/karhutla')->with('update', 'Data karhutla berhasil diupdate.');
    }


    public function show($id)
    {
        $karhutla = Karhutla::findOrFail($id); // Ambil data karhutla berdasarkan ID

        // Render view 'show' dan kirimkan data $karhutla
        return view('comdev.site_sk/karhutla.show', compact('karhutla'));
    }

    public function destroy(Karhutla $karhutla)
    {
            $karhutla->delete();
            $karhutla->handleDeleteFoto();
            return redirect()->back()->with('delete', 'Data karhutla berhasil dihapus.');
    }

    function batal(){
        return redirect('comdev/site_sk/karhutla');
    }

}
