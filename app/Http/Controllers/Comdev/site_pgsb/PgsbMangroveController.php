<?php

namespace App\Http\Controllers\Comdev\site_pgsb;

use carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\comdev\site_pgsb\Mangrove;
use Illuminate\Http\Request;

class PgsbMangroveController extends Controller
{
    public function index()
    {
        $list_mangrove = mangrove::all()->map(function($mangrove) {
            $mangrove->formatted_tanggal = Carbon::parse($mangrove->tanggal)->translatedFormat('d F Y');
            return $mangrove;
        });
        return view('comdev.site_pgsb.mangrove.index', compact('list_mangrove'));
    }


    public function create()
    {
        return view('comdev.site_pgsb.mangrove.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'semester' => 'required',
            'bibit_disemai' => 'required',
            'bibit_hidup' => 'required',
            'bibit_mati' => 'required',
            'tanggal' => 'required',
            'lokasi' => 'required',

        ]);

        $mangrove = new Mangrove;
        $mangrove->semester = $request->semester; // Perbaikan penulisan
        $mangrove->bibit_disemai = $request->bibit_disemai;
        $mangrove->bibit_hidup = $request->bibit_hidup;
        $mangrove->bibit_mati = $request->bibit_mati;
        $mangrove->tanggal = $request->tanggal;
        $mangrove->lokasi = $request->lokasi;

        $mangrove->handleUploadFoto();
        $mangrove->save();

        return redirect('comdev/site_pgsb/mangrove'); // Redirect ke index
    }

    public function edit($id)
    {

        $mangrove = Mangrove::findOrFail($id);

        if (is_string($mangrove->tanggal)) {
            $mangrove->tanggal = Carbon::parse($mangrove->tanggal);
        }

        return view('comdev.site_pgsb.mangrove.edit', compact('mangrove'));
    }




    public function update(Request $request, $id)
    {
        $mangrove = Mangrove::findOrFail($id);

        $mangrove->semester = $request->semester; // Perbaikan penulisan
        $mangrove->bibit_disemai = $request->bibit_disemai;
        $mangrove->bibit_hidup = $request->bibit_hidup;
        $mangrove->bibit_mati = $request->bibit_mati;
        $mangrove->tanggal = $request->tanggal;
        $mangrove->lokasi = $request->lokasi;

        $mangrove->save();
        if(request('file_foto')) $mangrove->handleUploadFoto();
        return redirect('comdev/site_pgsb/mangrove'); // Redirect ke index
    }


    public function show($id)
    {
        $mangrove = Mangrove::findOrFail($id); // Ambil data mangrove berdasarkan ID

        // Render view 'show' dan kirimkan data $mangrove
        return view('comdev.site_pgsb/mangrove.show', compact('mangrove'));
    }

    public function destroy(Mangrove $mangrove)
    {
            $mangrove->delete();
            $mangrove->handleDeleteFoto();
            return redirect()->back()->with('success', 'Data mangrove berhasil dihapus.');
    }

    function batal(){
        return redirect('comdev/site_pgsb/mangrove');
    }

}