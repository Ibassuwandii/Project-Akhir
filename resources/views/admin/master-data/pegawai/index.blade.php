<x-module.admin>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div style="padding-left: 20px;">
                    <h4 class="card-title m-0"><b>Daftar Pegawai</b></h4>
                </div>
                <div>
                    <a href="{{ url('admin/master-data/pegawai/create') }}" class="btn btn-success">
                        <i class="fas fa-plus-circle"></i> Tambah Data
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            {{-- <th>Departemen</th> --}}
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_pegawai as $pegawai)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span>{{ $pegawai->nama }}</span>
                                </div>
                            </td>
                            <td class="text-left">{{ $pegawai->email }}</td>
                            <td class="text-left">{{ $pegawai->jabatan }}</td>
                            {{-- <td>{{ $pegawai->departemen }}</td> --}}
                            <td class="text-center">
                                <div class="btn-group">
                                    {{-- <x-template.button.info-button url="admin/master-data/pegawai" id="{{ $pegawai->id }}" /> --}}
                                    <x-template.button.edit-button url="admin/master-data/pegawai" id="{{ $pegawai->id }}" />
                                    <x-template.button.delete-button  id="{{$pegawai->id}}" path="" />
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.admin>
