<x-module.comdevview>
    @if ($listLaporan->isEmpty())
        <p class="text-center">Tidak ada dokumen.</p>
    @else
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <div class="card-title">
                    Dokumen Divisi Comdev
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th>No</th>
                                <th>Nama Laporan</th>
                                <th>Tanggal Laporan</th>
                                <th>File PDF</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listLaporan as $laporan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $laporan->nama }}</td>
                                    <td>{{ $laporan->tanggal_dibuat }}</td>
                                    <td>
                                        @if ($laporan->file_pdf)
                                            <a href="{{ url('public') }}/{{ $laporan->file_pdf }}" target="_blank" class="text-primary">
                                                <i class="fa fa-file-pdf"></i> Unduh PDF
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
    @endif
</x-module.comdevview>
