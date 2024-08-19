<?php

namespace App\Http\Controllers\Comdev\site_sk;

use App\Http\Controllers\Controller;
use App\Models\comdev\site_sk\Perikanan;
use Illuminate\Http\Request;
use Carbon\Carbon;


class PerikananController extends Controller
{
    public function index()
    {
        $list_perikanan = Perikanan::all()->map(function ($perikanan) {
            $perikanan->formatted_tanggal = Carbon::parse($perikanan->tanggal)->format('d-m-Y');
            return $perikanan;
        });
        return view('comdev.site_sk.perikanan.index', ['list_perikanan' => $list_perikanan]);
    }

    public function create()
    {
        return view('comdev.site_sk.perikanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_desa' => 'required',
            'komuditas' => 'required',
            'luas_kolam' => 'required',
            'hasil_sebelum' => 'required',
            'hasil_target' => 'required',
            'hasil_akhir' => 'required',
            'keterangan' => 'required',
            'jumlah_penerima_laki_laki' => 'required',
            'jumlah_penerima_perempuan' => 'required',
            'tanggal' => 'required',
            // 'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif',
        ], [
            'nama_desa.required' => 'Field Nama Desa wajib diisi.',
            'komuditas.required' => 'Field Komuditas wajib diisi.',
            'luas_kolam.required' => 'Field Luas Kolam wajib diisi.',
            'hasil_sebelum.required' => 'Field Hasil Sebelum wajib diisi.',
            'hasil_target.required' => 'Field Hasil Target wajib diisi.',
            'hasil_akhir.required' => 'Field Hasil Akhir wajib diisi.',
            'keterangan.required' => 'Field Keterangan wajib diisi.',
            'jumlah_penerima_laki_laki.required' => 'Field Jumlah Penerima Laki-Laki wajib diisi.',
            'jumlah_penerima_perempuan.required' => 'Field Jumlah Penerima Perempuan wajib diisi.',
            // 'file_foto.required' => 'Field Foto wajib diisi.',
            // 'file_foto.image' => 'File harus berupa gambar.',
            // 'file_foto.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, atau gif.',
        ]);

        $perikanan = new Perikanan;
        $perikanan->nama_desa = $request->nama_desa;
        $perikanan->komuditas = $request->komuditas;
        $perikanan->luas_kolam = $request->luas_kolam;
        $perikanan->hasil_sebelum = $request->hasil_sebelum;
        $perikanan->hasil_target = $request->hasil_target;
        $perikanan->hasil_akhir = $request->hasil_akhir;
        $perikanan->keterangan = $request->keterangan;
        $perikanan->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
        $perikanan->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;
        $perikanan->tanggal = $request->tanggal;

        // $perikanan->handleUploadFoto();
        $perikanan->save();

        return redirect('comdev/site_sk/perikanan')->with('create', 'Data perikanan berhasil ditambahkan.');
    }

    public function edit(Perikanan $perikanan)
    {
        $data['perikanan'] = $perikanan;
        return view('comdev.site_sk.perikanan.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_desa' => 'required',
            'komuditas' => 'required',
            'luas_kolam' => 'required',
            'hasil_sebelum' => 'required',
            'hasil_target' => 'required',
            'hasil_akhir' => 'required',
            'keterangan' => 'required',
            'jumlah_penerima_laki_laki' => 'required',
            'jumlah_penerima_perempuan' => 'required',
            'tanggal' => 'required',
            // 'file_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ], [
            'nama_desa.required' => 'Field Nama Desa wajib diisi.',
            'komuditas.required' => 'Field Komuditas wajib diisi.',
            'luas_kolam.required' => 'Field Luas Kolam wajib diisi.',
            'hasil_sebelum.required' => 'Field Hasil Sebelum wajib diisi.',
            'hasil_target.required' => 'Field Hasil Target wajib diisi.',
            'hasil_akhir.required' => 'Field Hasil Akhir wajib diisi.',
            'keterangan.required' => 'Field Keterangan wajib diisi.',
            'jumlah_penerima_laki_laki.required' => 'Field Jumlah Penerima Laki-Laki wajib diisi.',
            'jumlah_penerima_perempuan.required' => 'Field Jumlah Penerima Perempuan wajib diisi.',
            // 'file_foto.image' => 'File harus berupa gambar.',
            // 'file_foto.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, atau gif.',
        ]);

        $perikanan = Perikanan::findOrFail($id);
        $perikanan->nama_desa = $request->nama_desa;
        $perikanan->komuditas = $request->komuditas;
        $perikanan->luas_kolam = $request->luas_kolam;
        $perikanan->hasil_sebelum = $request->hasil_sebelum;
        $perikanan->hasil_target = $request->hasil_target;
        $perikanan->hasil_akhir = $request->hasil_akhir;
        $perikanan->keterangan = $request->keterangan;
        $perikanan->jumlah_penerima_laki_laki = $request->jumlah_penerima_laki_laki;
        $perikanan->jumlah_penerima_perempuan = $request->jumlah_penerima_perempuan;
        $perikanan->tanggal = $request->tanggal;

        $perikanan->save();
        // if ($request->hasFile('file_foto')) $perikanan->handleUploadFoto();

        return redirect('comdev/site_sk/perikanan')->with('update', 'Data perikanan berhasil diperbarui.');
    }

    public function destroy(Perikanan $perikanan)
    {
        $perikanan->delete();
        $perikanan->handleDeleteFoto();
        return redirect()->back()->with('delete', 'Data perikanan berhasil dihapus.');
    }

    public function show($id)
    {
        $perikanan = Perikanan::findOrFail($id);
        $perikanan->formatted_tanggal = Carbon::parse($perikanan->tanggal)->translatedFormat('d F Y');

        return view('comdev.site_sk.perikanan.show', ['perikanan' => $perikanan]);
    }

    public function batal()
    {
        return redirect('comdev/site_sk/perikanan');
    }
}