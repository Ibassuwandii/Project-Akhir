<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Models\Admin\MasterData\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // Daftar jabatan pegawai yang tersedia
    protected $jabatanList = [
        'Manager',
        'Staff',
        'Admin',
        'HR',
        // Tambahkan jabatan lain sesuai kebutuhan
    ];

    // // Daftar departemen yang tersedia
    // protected $departemenList = [
    //     'Finance',
    //     'IT',
    //     'Human Resources',
    //     'Marketing',
    //     // Tambahkan departemen lain sesuai kebutuhan
    // ];

    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.master-data.pegawai.index', $data);
    }

    public function create()
    {
        $data['jabatanList'] = $this->jabatanList;
        // $data['departemenList'] = $this->departemenList; // Tambahkan ini
        return view('admin.master-data.pegawai.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'file_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'email' => 'required',
            'username' => 'required|unique:admin__pegawai',
            'password' => 'required',
            'jabatan' => 'required',
            // 'departemen' => 'required', // Tambahkan validasi departemen
        ]);

        $pegawai = new Pegawai;
        $pegawai->nama = $request->nama;
        $pegawai->email = $request->email;
        $pegawai->username = $request->username;
        $pegawai->password = $request->password;
        $pegawai->jabatan = $request->jabatan;
        // $pegawai->departemen = $request->departemen;

        if ($request->hasFile('file_foto')) {
            $pegawai->handleUploadFoto();
        }

        $pegawai->save();

        return redirect('admin/master-data/pegawai')->with('create', 'Data pegawai berhasil disimpan.');
    }

    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.show', $data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        $data['jabatanList'] = $this->jabatanList;
        // $data['departemenList'] = $this->departemenList; // Tambahkan ini
        return view('admin.master-data.pegawai.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            // 'file_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'email' => 'required',
            'username' => 'required',
            'jabatan' => 'required',
            // 'departemen' => 'required', // Tambahkan validasi departemen
        ]);

        $pegawai->nama = $request->nama;
        $pegawai->email = $request->email;
        $pegawai->username = $request->username;
        $pegawai->jabatan = $request->jabatan;
        // $pegawai->departemen = $request->departemen;

        // Periksa apakah ada input password baru, jika tidak, abaikan pengubahan password
        if ($request->filled('password')) {
            $pegawai->password = $request->password;
        }

        $pegawai->save();

        if(request('file_foto')) $pegawai->handleUploadFoto();

        return redirect('admin/master-data/pegawai')->with('update', 'Data pegawai berhasil di update.');
    }
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        $pegawai->handleDeleteFoto();
        return redirect()->back()->with('success', 'Data pegawai berhasil dihapus.');
    }
}
