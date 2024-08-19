<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div style="padding-left: 15px;">
                    <h4 class="card-title m-0"><b>Data Dokumen Comdev</b></h4>
                </div>
                <div>
                    <a href="{{ url('comdev/dokumen/create') }}" class="btn btn-info">
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
                            <th style="padding: 6px" style="width: 50px;">No</th>
                            <th style="padding: 6px" style="width: 100px;">Aksi</th>
                            <th style="padding: 6px">Judul Dokumen</th>
                            <th style="padding: 6px">Tanggal</th>
                            <th style="padding: 6px">Dokumen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_dokumen as $dokumen)
                        <tr>
                            <td style="padding: 2px">{{ $loop->iteration }}</td>
                            <td style="padding: 2px">
                                <div class="btn-group">
                                    {{-- <x-template.button.info-button url="comdev/dokumen" id="{{ $dokumen->id }}" /> --}}
                                    <x-template.button.edit-button url="comdev/dokumen" id="{{ $dokumen->id }}" />
                                    <x-template.button.delete-button  id="{{$dokumen->id}}" path="" />
                                </div>
                            </td>
                            <td class="text-left" style="padding: 2px">{{ $dokumen->judul_dokumen }}</td>
                            <td class="text-left" style="padding: 2px">{{ $dokumen->formatted_tanggal}}</td>
                            <td class="text-center" style="padding: 2px">
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
</x-module.comdev>
