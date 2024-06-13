<x-module.admin>
    <x-utils.notif />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Module
            </div>
            <a href="{{ url('admin/master-data/module/create') }}" class="float-right btn btn-success">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
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

