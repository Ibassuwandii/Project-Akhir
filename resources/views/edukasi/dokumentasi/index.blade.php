<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <div class="card-title">
                            Dokumentasi Divisi edukasi
                        </div>
                        <div class="float-right">
                            <a href="{{ url('edukasi/dokumentasi/create') }}" class="btn btn-success">
                                <i class="fas fa-plus-circle"></i> Tambah Data
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Judul Dokumentasi</th>
                                        <th>Tanggal Kegiatan</th>
                                        <th>Link Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_dokumentasi as $dokumentasi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                {{-- <x-template.button.info-button url="edukasi/dokumentasi" id="{{ $dokumentasi->id }}" /> --}}
                                                <x-template.button.edit-button url="edukasi/dokumentasi" id="{{ $dokumentasi->id }}" />
                                                <x-template.button.delete-button  id="{{$dokumentasi->id}}" path="" />
                                            </div>
                                        </td>
                                        <td>{{ $dokumentasi->judul_dokumentasi }}</td>
                                        <td>{{ $dokumentasi->tanggal_kegiatan }}</td>
                                        <td>
                                            <a href="{{ $dokumentasi->link_foto }}" target="_blank" class="text-primary">
                                                <i class="fa fa-link"></i> Lihat Dokumentasi
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.edukasi>
