<?php

namespace App\Http\Controllers\Admin\MasterData;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Role;
use App\Models\Admin\MasterData\Module;
use App\Models\Admin\MasterData\Pegawai;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua modul
        $modules = Module::all();

        // Filter modul yang tidak ingin ditampilkan (contoh: ID '9b564944-6972-4e83-adaa-644ca2e56c27')
        $filteredModules = $modules->filter(function($module) {
            return $module->id != '9b564944-6972-4e83-adaa-644ca2e56c27'; // ID harus dalam format string
        });

        // Kirim data ke view
        $data['list_module'] = $filteredModules;
        return view('admin.master-data.module.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.master-data.module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'app' => 'required',
            'tag' => 'required',
            'name' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'color' => 'required',
            'menu' => 'required',
            'url' => 'required',
        ]);

        // Jika validasi lolos, simpan data
        $module = new Module;
        $module->app = $request->app;
        $module->tag = $request->tag;
        $module->name = $request->name;
        $module->title = $request->title;
        $module->subtitle = $request->subtitle;
        $module->color = $request->color;
        $module->menu = $request->menu;
        $module->url = $request->url;
        $module->save();

        return redirect('admin/master-data/module')->with('create', 'Data Module berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        $data['module'] = $module;
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.master-data.module.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        $data['module'] = $module;
        return view('admin.master-data.module.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Module $module)
    {
        // Validasi data
        $request->validate([
            'app' => 'required',
            'tag' => 'required',
            'name' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'color' => 'required',
            'url' => 'required',
        ]);

        // Jika validasi lolos, update data
        $module->app = $request->app;
        $module->tag = $request->tag;
        $module->name = $request->name;
        $module->color = $request->color;
        $module->title = $request->title;
        $module->subtitle = $request->subtitle;
        $module->url = $request->url;
        $module->save();

        return redirect('admin/master-data/module')->with('update', 'Data Module berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect()->back()->with('delete', 'Data module berhasil dihapus.');
    }

    public function addRole()
    {
        $role = new Role;
        $role->id_pegawai = request('id_pegawai');
        $role->id_module = request('id_module');
        $role->save();

        return back();
    }

    public function deleteRole(Role $role)
    {
        $role->delete();
        return back();
    }

    function batal()
    {
        return redirect('admin/master-data/module');
    }
}
