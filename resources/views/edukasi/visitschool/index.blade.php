<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <div class="card-title">
                Data Visit School
            </div>
            <a href="{{url('edukasi/visitschool/create')}}" class="btn btn-success float-right">
                <i class="fas fa-plus-circle"></i> Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="bg-secondary text-white">
                            <th rowspan="2" class="text-center align-middle">No</th>
                            <th rowspan="2" class="text-center align-middle">Aksi</th>
                            <th rowspan="2" class="text-center align-middle">Nama Sekolah</th>
                            <th rowspan="2" class="text-center align-middle">Lokasi Kegiatan</th>
                            <th colspan="2" class="text-center">Jumlah Peserta</th>
                            <th rowspan="2" class="text-center align-middle">Tanggal Kunjungan</th>
                            <th rowspan="2" class="text-center align-middle">Materi Kegiatan</th>
                        </tr>
                        <tr class="bg-secondary text-white">
                            <th class="text-center">L</th>
                            <th class="text-center">P</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_visitschool as $visitschool)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-template.button.info-button url="edukasi/visitschool" id="{{ $visitschool->id }}" />
                                    <x-template.button.edit-button url="edukasi/visitschool" id="{{ $visitschool->id }}" />
                                    <x-template.button.delete-button id="{{ $visitschool->id }}" path="" />
                                </div>
                            </td>
                            <td>{{ $visitschool->nama_sekolah }}</td>
                            <td>{{ $visitschool->lokasi }}</td>
                            <td>{{ $visitschool->laki_laki }}</td>
                            <td>{{ $visitschool->perempuan }}</td>
                            <td>{{ $visitschool->tanggal }}</td>
                            <td>{{ $visitschool->materi }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.edukasi>
