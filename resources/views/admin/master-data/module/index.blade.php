<x-module.admin>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div style="padding-left: 20px;">
                    <h4 class="card-title m-0"><b>Daftar Module</b></h4>
                </div>
                <div>
                    <a href="{{ url('admin/master-data/module/create') }}" class="btn btn-success">
                        <i class="fas fa-plus-circle"></i> Tambah Data
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped table-hover">
                <thead class="bg-secondary text-white">
                    <th>No</th>
                    <th width="100px">Aksi</th>
                    <th>Nama Module</th>
                    <th>Tag</th>
                    {{-- <th>Jumlah Module</th> --}}
                </thead>
                <tbody>
                    @foreach ($list_module as $module)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>
                            <div class="btn-group">
                               <x-template.button.info-button url="admin/master-data/module"
                               id="{{ $module->id }}" />
                               <x-template.button.edit-button url="admin/master-data/module"
                               id="{{ $module->id }}" />
                            <x-template.button.delete-button  id="{{$module->id}}" path="" />
                            </div>
                        </td>
                        <td class="text-left">{{ $module->name}}</td>
                        <td class="text-left">{{ $module->tag}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>

