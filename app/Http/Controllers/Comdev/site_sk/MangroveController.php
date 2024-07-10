<?php

namespace App\Http\Controllers\Comdev\site_sk;


use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Mangrove;
use Illuminate\Http\Request;

class MangroveController extends Controller
{
    public function index()
    {
        $list_mangrove = mangrove::all()->map(function($mangrove) {
            $mangrove->formatted_tanggal = Carbon::parse($mangrove->tanggal)->translatedFormat('d F Y');
            return $mangrove;
        });
        return view('comdev.site_sk.mangrove.index', compact('list_mangrove'));
    }


    public function create()
    {
        return view('comdev.site_sk.mangrove.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'semester' => 'required',
            'bibit_disemai' => 'required',
            'bibit_hidup' => 'required',
            'bibit_mati' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'file_foto.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $mangrove = new Mangrove;
        $mangrove->semester = $request->semester; // Perbaikan penulisan
        $mangrove->bibit_disemai = $request->bibit_disemai;
        $mangrove->bibit_hidup = $request->bibit_hidup;
        $mangrove->bibit_mati = $request->bibit_mati;
        $mangrove->tanggal = $request->tanggal;
        $mangrove->keterangan = $request->keterangan;

        $mangrove->handleUploadFoto();
        $mangrove->save();

        return redirect('comdev/site_sk/mangrove'); // Redirect ke index
    }

    public function edit( Mangrove $mangrove)
    {
        $data['mangrove'] = $mangrove;
        return view('comdev/site_sk/mangrove/edit', $data);
    }




    public function update(Request $request, $id)
    {
        $mangrove = Mangrove::findOrFail($id);

        $mangrove->semester = $request->semester; // Perbaikan penulisan
        $mangrove->bibit_disemai = $request->bibit_disemai;
        $mangrove->bibit_hidup = $request->bibit_hidup;
        $mangrove->bibit_mati = $request->bibit_mati;
        $mangrove->tanggal = $request->tanggal;
        $mangrove->keterangan = $request->keterangan;

        $mangrove->save();
        if(request('file_foto')) $mangrove->handleUploadFoto();
        return redirect('comdev/site_sk/mangrove'); // Redirect ke index
    }


    public function show($id)
    {
        $mangrove = Mangrove::findOrFail($id); // Ambil data mangrove berdasarkan ID

        // Render view 'show' dan kirimkan data $mangrove
        return view('comdev.site_sk/mangrove.show', compact('mangrove'));
    }

    public function destroy(Mangrove $mangrove)
    {
        $mangrove->delete();
        $mangrove->handleDeleteFoto();
        return redirect()->back()->with('success', 'Data mangrove berhasil dihapus.');
    }

    function batal(){
        return redirect('comdev/site_sk/mangrove');
    }

}
