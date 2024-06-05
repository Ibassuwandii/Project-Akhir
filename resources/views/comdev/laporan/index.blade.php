<x-module.comdev>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <div class="card-title">
                Laporan Divisi Comdev
            </div>
            <a href="{{ url('comdev/laporan/create') }}" class="btn btn-success float-right">
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
                            <th>Jenis Laporan</th>
                            <th>Tanggal Dibuat</th>
                            <th>Judul Laporan</th>
                            <th>Unduh Laporan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_laporan as $laporan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    {{-- <x-template.button.info-button url="comdev/laporan" id="{{ $laporan->id }}" /> --}}
                                    <x-template.button.edit-button url="comdev/laporan" id="{{ $laporan->id }}" />
                                    <x-template.button.delete-button  id="{{$laporan->id}}" path="" />
                                </div>
                            </td>
                            <td>{{ $laporan->jenis_laporan }}</td>
                            <td>{{ $laporan->tanggal_dibuat }}</td>
                            <td>{{ $laporan->judul_laporan}}</td>
                            <td>
                                @if ($laporan->file_pdf)
                                    <a href="{{ url('public') }}/{{ $laporan->file_pdf }}" target="_blank" class="text-danger">
                                        <i class="far fa-file-pdf"></i> Unduh PDF
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
