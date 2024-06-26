<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="padding-left: 20px;">
                                <h4 class="card-title m-0"><b>Data Laporan Edukasi</b></h4>
                            </div>
                            <div>
                                <a href="{{ url('edukasi/laporan/create') }}" class="btn btn-success">
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
                                        <th style="padding: 6px" >No</th>
                                        <th style="padding: 6px" >Aksi</th>
                                        <th style="padding: 6px" >Jenis Laporan</th>
                                        <th style="padding: 6px" >Tanggal Dibuat</th>
                                        <th style="padding: 6px" >Judul Laporan</th>
                                        <th style="padding: 6px" >Unduh Laporan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_laporan as $laporan)
                                    <tr>
                                        <td style="padding: 2px" >{{ $loop->iteration }}</td>
                                        <td style="padding: 2px" >
                                            <div class="btn-group">
                                                {{-- <x-template.button.info-button url="edukasi/laporan" id="{{ $laporan->id }}" /> --}}
                                                <x-template.button.edit-button url="edukasi/laporan" id="{{ $laporan->id }}" />
                                                <x-template.button.delete-button  id="{{$laporan->id}}" path="" />
                                            </div>
                                        </td>
                                        <td class="text-left" style="padding: 2px" >{{ $laporan->jenis_laporan }}</td>
                                        <td class="text-left" style="padding: 2px" >{{ $laporan->formatted_tanggal_dibuat }}</td>
                                        <td class="text-left" style="padding: 2px" >{{ $laporan->judul_laporan }}</td>
                                        <td style="padding: 2px" >
                                            @if ($laporan->file_pdf)
                                                <a href="{{ url('public') }}/{{ $laporan->file_pdf }}" target="_blank" class="text-primary">
                                                    <i class="far fa-file-pdf"></i> Unduh Laporan
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
            </div>
        </div>
    </div>
</x-module.edukasi>
