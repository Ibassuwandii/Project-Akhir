<?php

namespace App\Http\Controllers\Comdev\site_sk;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Pertanian;
use Illuminate\Http\Request;

class PertanianController extends Controller
{
    public function index()
    {
        $list_pertanian = Pertanian::all()->map(function($pertanian) {
            $pertanian->formatted_tanggal = Carbon::parse($pertanian->tanggal)->translatedFormat('d F Y');
            return $pertanian;
        });
        return view('comdev.site_sk.pertanian.index', compact('list_pertanian'));
    }

    public function create()
    {
        return view('comdev.site_sk.pertanian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_desa' => 'required',
            'komuditas' => 'required',
            'luas_lahan' => 'required',
            'hasil_sebelum' => 'required',
            'hasil_target' => 'required',
            'hasil_akhir' => 'required',
            'keterangan' => 'required',
            'jumlah_penerima_laki_laki' => 'required',
            'jumlah_penerima_perempuan' => 'required',
            'tanggal' => 'required',
            // 'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'nama_desa.required' => 'Field Nama Desa wajib diisi.',
            'komuditas.required' => 'Field Komoditas wajib diisi.',
            'luas_lahan.required' => 'Field Luas Lahan wajib diisi.',
            'hasil_sebelum.required' => 'Field Hasil Sebelum wajib diisi.',
            'hasil_target.required' => 'Field Hasil Target wajib diisi.',
            'hasil_akhir.required' => 'Field Hasil Akhir wajib diisi.',
            'keterangan.required' => 'Field Keterangan wajib diisi.',
            'jumlah_penerima_laki_laki.required' => 'Field Jumlah Penerima Laki-Laki wajib diisi.',
            'jumlah_penerima_perempuan.required' => 'Field Jumlah Penerima Perempuan wajib diisi.',
            'tanggal.required' => 'Field Tanggal wajib diisi.',
            // 'file_foto.required' => 'Field Foto wajib diisi.',
            // 'file_foto.image' => 'File harus berupa gambar.',
            // 'file_foto.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, atau gif.',
            // 'file_foto.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
        ]);

        $pertanian = new Pertanian;
        $pertanian->nama_desa = $request->nama_desa;
        $pertanian->komoditas = $request->komoditas;
        $pertanian->luas_lahan = $request->luas_lahan;
        $pertanian->hasil_sebelum = $request->hasil_sebelum;
        $pertanian->hasil_target = $request->hasil_target;
        $pertanian->hasil_akhir = $request->hasil_akhir;
        $pertanian->keterangan = $request->keterangan;
        $pertanian->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
        $pertanian->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;
        $pertanian->tanggal = $request->tanggal;

        // $pertanian->handleUploadFoto();
        $pertanian->save();

        return redirect('comdev/site_sk/pertanian')->with('create', 'Data pertanian berhasil ditambahkan.');
    }

    public function edit(Pertanian $pertanian)
    {
        $data['pertanian'] = $pertanian;
        return view('comdev.site_sk.pertanian.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_desa' => 'required',
            'komuditas' => 'required',
            'luas_lahan' => 'required',
            'hasil_sebelum' => 'required',
            'hasil_target' => 'required',
            'hasil_akhir' => 'required',
            'keterangan' => 'required',
            'jumlah_penerima_laki_laki' => 'required',
            'jumlah_penerima_perempuan' => 'required',
            'tanggal' => 'required',
            // 'file_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'nama_desa.required' => 'Field Nama Desa wajib diisi.',
            'komuditas.required' => 'Field Komoditas wajib diisi.',
            'luas_lahan.required' => 'Field Luas Lahan wajib diisi.',
            'hasil_sebelum.required' => 'Field Hasil Sebelum wajib diisi.',
            'hasil_target.required' => 'Field Hasil Target wajib diisi.',
            'hasil_akhir.required' => 'Field Hasil Akhir wajib diisi.',
            'keterangan.required' => 'Field Keterangan wajib diisi.',
            'jumlah_penerima_laki_laki.required' => 'Field Jumlah Penerima Laki-Laki wajib diisi.',
            'jumlah_penerima_perempuan.required' => 'Field Jumlah Penerima Perempuan wajib diisi.',
            'tanggal.required' => 'Field Tanggal wajib diisi.',
            // 'file_foto.image' => 'File harus berupa gambar.',
            // 'file_foto.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, atau gif.',
            // 'file_foto.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
        ]);

        $pertanian = Pertanian::findOrFail($id);
        $pertanian->nama_desa = $request->nama_desa;
        $pertanian->komoditas = $request->komoditas;
        $pertanian->luas_lahan = $request->luas_lahan;
        $pertanian->hasil_sebelum = $request->hasil_sebelum;
        $pertanian->hasil_target = $request->hasil_target;
        $pertanian->hasil_akhir = $request->hasil_akhir;
        $pertanian->keterangan = $request->keterangan;
        $pertanian->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
        $pertanian->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;
        $pertanian->tanggal = $request->tanggal;

        $pertanian->save();
        // if($request->hasFile('file_foto')) $pertanian->handleUploadFoto();

        return redirect('comdev/site_sk/pertanian')->with('update', 'Data pertanian berhasil diperbarui.');
    }

    public function destroy(Pertanian $pertanian)
    {
        $pertanian->delete();
        // $pertanian->handleDeleteFoto();
        return redirect()->back()->with('delete', 'Data pertanian berhasil dihapus.');
    }

    public function show($id)
    {
        $pertanian = Pertanian::findOrFail($id); // Ambil data pertanian berdasarkan ID

        // Render view 'show' dan kirimkan data $pertanian
        return view('comdev.site_sk.pertanian.show', compact('pertanian'));
    }

    function batal(){
        return redirect('comdev/site_sk/pertanian');
    }
}
