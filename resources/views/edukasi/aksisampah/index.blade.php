<x-module.edukasi>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div style="padding-left: 20px;">
                    <h4 class="card-title m-0"><b>Data Aksi Sampah</b></h4>
                </div>
                <div>
                    <a href="{{ url('edukasi/aksisampah/create') }}" class="btn btn-success">
                        <i class="fas fa-plus-circle"></i> Tambah Data
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="bg-secondary text-white">
                            <th style="padding: 6px; width: 50px;" rowspan="2" class="text-center align-middle">No</th>
                            <th style="padding: 6px" rowspan="2" class="text-center align-middle">Aksi</th>
                            <th style="padding: 6px" rowspan="2" class="text-center align-middle">Lokasi Kegiatan</th>
                            <th style="padding: 6px" rowspan="2" class="text-center align-middle">Jumlah Peserta</th>
                            <th style="padding: 6px" rowspan="2" class="text-center align-middle">Tanggal Kegiatan</th>
                            <th style="padding: 6px" colspan="2" class="text-center">Sampah</th>
                        </tr>
                        <tr class="bg-secondary text-white">
                            <th style="padding: 6px; width: 90px;" class="text-center">Total</th>
                            <th style="padding: 6px; width: 150px;" class="text-center">Jenis</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_aksisampah as $aksisampah)
                        <tr>
                            <td class="text-center" style="padding: 2px">{{ $loop->iteration }}</td>
                            <td class="text-center" style="padding: 2px">
                                <div class="btn-group">
                                    <x-template.button.info-button url="edukasi/aksisampah" id="{{ $aksisampah->id }}" />
                                    <x-template.button.edit-button url="edukasi/aksisampah" id="{{ $aksisampah->id }}" />
                                    <x-template.button.delete-button id="{{ $aksisampah->id }}" path="" />
                                </div>
                            </td>
                            <td class="text-left" style="padding: 2px">{{ $aksisampah->lokasi }}</td>
                            <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $aksisampah->jumlah_peserta }}</td>
                            <td class="text-left" style="padding: 2px">{{ $aksisampah->formatted_tanggal }}</td>
                            <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $aksisampah->jumlah_sampah }}</td>
                            <td class="text-left" style="padding: 2px">{{ $aksisampah->jenis_sampah }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.edukasi>
