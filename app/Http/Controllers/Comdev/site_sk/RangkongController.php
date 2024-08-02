<?php

namespace App\Http\Controllers\Comdev\site_sk;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Rangkong;
use Illuminate\Http\Request;

class RangkongController extends Controller
{
    public function index()
    {
        $data['list_rangkong'] = Rangkong::all();
        return view('comdev.site_sk.rangkong.index', $data);
    }

    public function create()
    {
        return view('comdev.site_sk.rangkong.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_desa' => 'required|string',
            'komuditas' => 'required|string',
            'luas_lahan' => 'required',
            'hasil_sebelum' => 'required|numeric',
            'hasil_target' => 'required|numeric',
            'hasil_akhir' => 'required|numeric',
            'keterangan' => 'required|string',
            'jumlah_penerima_laki_laki' => 'required|numeric',
            'jumlah_penerima_perempuan' => 'required|numeric',
            'file_foto.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'nama_desa.required' => 'Field Nama Desa wajib diisi.',
            'nama_desa.string' => 'Field Nama Desa harus berupa teks.',
            'komuditas.required' => 'Field Komuditas wajib diisi.',
            'komuditas.string' => 'Field Komuditas harus berupa teks.',
            'luas_lahan.required' => 'Field Luas Lahan wajib diisi.',
            'luas_lahan.required' => 'Field Luas Lahan harus berupa angka.',
            'hasil_sebelum.required' => 'Field Hasil Sebelum wajib diisi.',
            'hasil_sebelum.numeric' => 'Field Hasil Sebelum harus berupa angka.',
            'hasil_target.required' => 'Field Hasil Target wajib diisi.',
            'hasil_target.numeric' => 'Field Hasil Target harus berupa angka.',
            'hasil_akhir.required' => 'Field Hasil Akhir wajib diisi.',
            'hasil_akhir.numeric' => 'Field Hasil Akhir harus berupa angka.',
            'keterangan.required' => 'Field Keterangan wajib diisi.',
            'keterangan.string' => 'Field Keterangan harus berupa teks.',
            'jumlah_penerima_laki_laki.required' => 'Field Jumlah Penerima Laki-Laki wajib diisi.',
            'jumlah_penerima_laki_laki.numeric' => 'Field Jumlah Penerima Laki-Laki harus berupa angka.',
            'jumlah_penerima_perempuan.required' => 'Field Jumlah Penerima Perempuan wajib diisi.',
            'jumlah_penerima_perempuan.numeric' => 'Field Jumlah Penerima Perempuan harus berupa angka.',
            'file_foto.*.image' => 'File harus berupa gambar.',
            'file_foto.*.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, atau gif.',
            'file_foto.*.max' => 'Ukuran file tidak boleh lebih dari 2048 KB.',
        ]);

        $rangkong = new Rangkong;
        $rangkong->nama_desa = $request->nama_desa;
        $rangkong->komuditas = $request->komuditas;
        $rangkong->luas_lahan = $request->luas_lahan;
        $rangkong->hasil_sebelum = $request->hasil_sebelum;
        $rangkong->hasil_target = $request->hasil_target;
        $rangkong->hasil_akhir = $request->hasil_akhir;
        $rangkong->keterangan = $request->keterangan;
        $rangkong->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
        $rangkong->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;

        if ($request->hasFile('file_foto')) {
            $rangkong->handleUploadFoto();
        }

        $rangkong->save();

        return redirect('comdev/site_sk/rangkong')->with('create', 'Data rangkong berhasil ditambahkan.');
    }

    public function edit(Rangkong $rangkong)
    {
        $data['rangkong'] = $rangkong;
        return view('comdev.site_sk.rangkong.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_desa' => 'required|string',
            'komuditas' => 'required|string',
            'luas_lahan' => 'required',
            'hasil_sebelum' => 'required|numeric',
            'hasil_target' => 'required|numeric',
            'hasil_akhir' => 'required|numeric',
            'keterangan' => 'required|string',
            'jumlah_penerima_laki_laki' => 'required|numeric',
            'jumlah_penerima_perempuan' => 'required|numeric',
            'file_foto.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'nama_desa.required' => 'Field Nama Desa wajib diisi.',
            'nama_desa.string' => 'Field Nama Desa harus berupa teks.',
            'komuditas.required' => 'Field Komuditas wajib diisi.',
            'komuditas.string' => 'Field Komuditas harus berupa teks.',
            'luas_lahan.required' => 'Field Luas Lahan wajib diisi.',
            'hasil_sebelum.required' => 'Field Hasil Sebelum wajib diisi.',
            'hasil_sebelum.numeric' => 'Field Hasil Sebelum harus berupa angka.',
            'hasil_target.required' => 'Field Hasil Target wajib diisi.',
            'hasil_target.numeric' => 'Field Hasil Target harus berupa angka.',
            'hasil_akhir.required' => 'Field Hasil Akhir wajib diisi.',
            'hasil_akhir.numeric' => 'Field Hasil Akhir harus berupa angka.',
            'keterangan.required' => 'Field Keterangan wajib diisi.',
            'keterangan.string' => 'Field Keterangan harus berupa teks.',
            'jumlah_penerima_laki_laki.required' => 'Field Jumlah Penerima Laki-Laki wajib diisi.',
            'jumlah_penerima_laki_laki.numeric' => 'Field Jumlah Penerima Laki-Laki harus berupa angka.',
            'jumlah_penerima_perempuan.required' => 'Field Jumlah Penerima Perempuan wajib diisi.',
            'jumlah_penerima_perempuan.numeric' => 'Field Jumlah Penerima Perempuan harus berupa angka.',
            'file_foto.*.image' => 'File harus berupa gambar.',
            'file_foto.*.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, atau gif.',
            'file_foto.*.max' => 'Ukuran file tidak boleh lebih dari 2048 KB.',
        ]);

        $rangkong = Rangkong::findOrFail($id);
        $rangkong->nama_desa = $request->nama_desa;
        $rangkong->komuditas = $request->komuditas;
        $rangkong->luas_lahan = $request->luas_lahan;
        $rangkong->hasil_sebelum = $request->hasil_sebelum;
        $rangkong->hasil_target = $request->hasil_target;
        $rangkong->hasil_akhir = $request->hasil_akhir;
        $rangkong->keterangan = $request->keterangan;
        $rangkong->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
        $rangkong->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;

        $rangkong->save();
        if ($request->hasFile('file_foto')) {
            $rangkong->handleUploadFoto();
        }

        return redirect('comdev/site_sk/rangkong')->with('update', 'Data rangkong berhasil diperbarui.');
    }

    public function destroy(Rangkong $rangkong)
    {
        $rangkong->delete();
        $rangkong->handleDeleteFoto();
        return redirect()->back()->with('delete', 'Data rangkong berhasil dihapus.');
    }

    public function show($id)
    {
        $rangkong = Rangkong::findOrFail($id);
        return view('comdev.site_sk.rangkong.show', compact('rangkong'));
    }

    public function batal()
    {
        return redirect('comdev/site_sk/rangkong');
    }
}
