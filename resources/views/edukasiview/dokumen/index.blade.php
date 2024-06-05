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
                                <th>No</th>
                                <th>Judul Dokumen</th>
                                <th>Tanggal</th>
                                <th>Dokumen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listDokumen as $dokumen)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dokumen->judul_dokumen }}</td>
                                <td>{{ $dokumen->tanggal}}</td>
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
    @endif
</x-module.edukasiview>

