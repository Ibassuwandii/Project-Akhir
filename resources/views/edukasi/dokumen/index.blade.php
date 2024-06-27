<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div style="padding-left: 20px;">
                    <h4 class="card-title m-0"><b>Data Dokumen Edukasi</b></h4>
                </div>
                <div>
                    <a href="{{ url('edukasi/dokumen/create') }}" class="btn btn-success">
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
                            <th style="width: 50px;">No</th>
                            <th style="width: 100px;">Aksi</th>
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
                                    {{-- <x-template.button.info-button url="edukasi/dokumen" id="{{ $dokumen->id }}" /> --}}
                                    <x-template.button.edit-button url="edukasi/dokumen" id="{{ $dokumen->id }}" />
                                    <x-template.button.delete-button  id="{{$dokumen->id}}" path="" />
                                </div>
                            </td>
                            <td class="text-left">{{ $dokumen->judul_dokumen }}</td>
                            <td class="text-left">{{ $dokumen->formatted_tanggal}}</td>
                            <td>
                                @if ($dokumen->file_pdf)
                                    <a href="{{ url('public') }}/{{ $dokumen->file_pdf }}" target="_blank" class="text-primary">
                                        <i class=""></i> Lihat Dokumen
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
</x-module.edukasi>
