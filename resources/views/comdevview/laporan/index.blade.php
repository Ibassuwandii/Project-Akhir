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
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label for="filter" class="form-label">Filter:</label>
                        <select id="filter" class="form-select" onchange="filterLaporan()">
                            <option value="all">Semua</option>
                            <option value="bulanan">Bulanan</option>
                            <option value="tahunan">Tahunan</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th style="width: 50px;">No</th>
                                <th>Jenis Laporan</th>
                                <th>Tanggal Laporan</th>
                                <th>Judul Laporan</th>
                                <th>File Laporan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listLaporan as $laporan)
                                <tr class="laporan-row" data-jenis="{{ $laporan->jenis_laporan }}">
                                    <td style="padding: 6px">{{ $loop->iteration }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $laporan->jenis_laporan }}</td>
                                    <td class="text-left" style="padding: 2px">{{ \Carbon\Carbon::parse($laporan->tanggal_dibuat)->translatedFormat('d F Y') }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $laporan->judul_laporan }}</td>
                                    <td style="padding: 2px">
                                        @if ($laporan->file_pdf)
                                            <a href="{{ url('public') }}/{{ $laporan->file_pdf }}" target="_blank" class="text-primary" download="{{ $laporan->file_pdf }}">
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
    @endif
</x-module.comdevview>

