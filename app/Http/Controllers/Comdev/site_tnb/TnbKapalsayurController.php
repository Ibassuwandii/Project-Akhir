<?php

namespace App\Http\Controllers\Comdev\site_tnb;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_tnb\kapalsayur;
use Illuminate\Http\Request;

class TnbKapalsayurController extends Controller
{
    public function index()
    {
        $data['list_kapalsayur'] = KapalSayur::all();
        return view('comdev.site_tnb.kapalsayur.index',$data);
    }


    public function create()
    {
        return view('comdev.site_tnb.kapalsayur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_trip' => 'required',
            'jumlah_trip' => 'required',
            'hasil_penjualan' => 'required',
            'keterangan' => 'required',
            // 'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan persyaratan Anda
        ]);

        $kapalsayur = new KapalSayur;
        $kapalsayur->tanggal_trip = $request->tanggal_trip;
        $kapalsayur->jumlah_trip = $request->jumlah_trip;
        $kapalsayur->hasil_penjualan = $request->hasil_penjualan;
        $kapalsayur->keterangan = $request->keterangan;



        $kapalsayur->save();

        return redirect('comdev/site_tnb/kapalsayur');
    }


    public function edit( KapalSayur $kapalsayur)
    {
        $data['kapalsayur'] = $kapalsayur;
        return view('comdev.site_tnb.kapalsayur.edit', $data);
    }





    public function update(Request $request, $id)
    {
         // Mengambil laporan dari basis data berdasarkan ID
         $kapalsayur = KapalSayur::findOrFail($id);

         // Menetapkan nilai properti dari permintaan
         $kapalsayur->tanggal_trip = $request->tanggal_trip;
         $kapalsayur->jumlah_trip = $request->jumlah_trip;
         $kapalsayur->hasil_penjualan = $request->hasil_penjualan;
         $kapalsayur->keterangan = $request->keterangan;




        $kapalsayur->save();

        return redirect('comdev/site_tnb/kapalsayur');
    }

    public function destroy(KapalSayur $kapalsayur)
    {
            $kapalsayur->delete();

            return redirect()->back()->with('success', 'Data kapalsayur berhasil dihapus.');
    }


    public function show($id)
    {
        $kapalsayur = KapalSayur::findOrFail($id); // Ambil data kapalsayur berdasarkan ID

        // Render view 'show' dan kirimkan data $kapalsayur
        return view('comdev.site_tnb.kapalsayur.show', compact('kapalsayur'));
    }


    function batal(){
        return redirect('comdev/site_tnb/kapalsayur');
    }


}
