<x-module.edukasiview>
    @if ($listDokumen->isEmpty())
        <p class="text-center">Tidak ada dokumen.</p>
    @else
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <div class="card-title">
                    Dokumen Divisi Edukasi
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th style="padding: 6px; width: 50px;"">No</th>
                                <th style="padding: 6px">Judul Dokumen</th>
                                <th style="padding: 6px">Tanggal</th>
                                <th style="padding: 6px">Dokumen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listDokumen as $dokumen)
                            <tr>
                                <td style="padding: 6px">{{ $loop->iteration }}</td>
                                <td class="text-left" style="padding: 2px">{{ $dokumen->judul_dokumen }}</td>
                                <td class="text-left" style="padding: 2px">{{ \Carbon\Carbon::parse($dokumen->tanggal)->translatedFormat('d F Y') }}</td>
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
    @endif
</x-module.edukasiview>

