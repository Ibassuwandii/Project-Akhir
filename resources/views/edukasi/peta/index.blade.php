<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <div class="card-title" style="font-weight: bold;">
                            Peta Divisi edukasi
                        </div>
                        <div class="float-right">
                            <a href="{{ url('edukasi/peta/create') }}" class="btn btn-success">
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
                                        <th>Judul Peta</th>
                                        <th>Tanggal Upload</th>
                                        <th>Gambar Peta</th
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_peta as $peta)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                {{-- <x-template.button.info-button url="edukasi/peta" id="{{ $peta->id }}" /> --}}
                                                <x-template.button.edit-button url="edukasi/peta" id="{{ $peta->id }}" />
                                                <x-template.button.delete-button  id="{{$peta->id}}" path="" />
                                            </div>
                                        </td>
                                        <td class="text-left">{{ $peta->judul_peta }}</td>
                                        <td class="text-left">{{ $peta->tanggal_upload }}</td>
                                        <td>
                                            @if ($peta->file_foto)
                                                <a href="{{ url('public') }}/{{ $peta->file_foto }}" target="_blank">
                                                    Lihat Gambar
                                                </a>
                                            @else
                                                <p>Tidak ada gambar</p>
                                            @endif
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
