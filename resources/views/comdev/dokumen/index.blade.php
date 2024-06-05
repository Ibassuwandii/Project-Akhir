<x-module.comdev>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <div class="card-title">
                Dokumen Divisi Comdev
            </div>
            <a href="{{ url('comdev/dokumen/create') }}" class="btn btn-success float-right">
                <i class="fas fa-plus-circle"></i> Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Judul Dokumen</th>
                            <th>Tanggal</th>
                            <th>Dokumen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_dokumen as $dokumen)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    {{-- <x-template.button.info-button url="comdev/dokumen" id="{{ $dokumen->id }}" /> --}}
                                    <x-template.button.edit-button url="comdev/dokumen" id="{{ $dokumen->id }}" />
                                    <x-template.button.delete-button  id="{{$dokumen->id}}" path="" />
                                </div>
                            </td>
                            <td>{{ $dokumen->judul_dokumen }}</td>
                            <td>{{ $dokumen->tanggal}}</td>
                            <td>
                                @if ($dokumen->file_pdf)
                                    <a href="{{ url('public') }}/{{ $dokumen->file_pdf }}" target="_blank" class="text-primary">
                                        <i class="far fa-file-pdf"></i> Lihat Dokumen
                                    </a>
                                @else
                                    <span class="text-muted">Tidak ada file</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.comdev>
