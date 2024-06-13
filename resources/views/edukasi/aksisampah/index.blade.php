<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <div class="card-title" style="font-weight: bold;">
                Data Aksi Sampah
            </div>
            <a href="{{url('edukasi/aksisampah/create')}}" class="btn btn-success float-right">
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
                            <th rowspan="2" class="text-center align-middle">Lokasi Kegiatan</th>
                            <th rowspan="2" class="text-center align-middle">Jumlah Peserta</th>
                            <th rowspan="2" class="text-center align-middle">Tanggal Kegiatan</th>
                            <th colspan="2" class="text-center">Sampah</th>
                        </tr>
                        <tr class="bg-secondary text-white">
                            <th class="text-center">Jenis </th>
                            <th class="text-center">Jumlah </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_aksisampah as $aksisampah)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-template.button.info-button url="edukasi/aksisampah" id="{{ $aksisampah->id }}" />
                                    <x-template.button.edit-button url="edukasi/aksisampah" id="{{ $aksisampah->id }}" />
                                    <x-template.button.delete-button id="{{ $aksisampah->id }}" path="" />
                                </div>
                            </td>
                            <td class="text-left">{{ $aksisampah->lokasi }}</td>
                            <td style="width: 50px;" class="text-left">{{ $aksisampah->jumlah_peserta }}</td>
                            <td class="text-left">{{ $aksisampah->formatted_tanggal }}</td>
                            <td class="text-left">{{ $aksisampah->jenis_sampah }}</td>
                            <td class="text-left">{{ $aksisampah->jumlah_sampah }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.edukasi>
