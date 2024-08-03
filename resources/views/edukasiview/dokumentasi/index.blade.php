<x-module.edukasiview>
    @if ($listDokumentasi->isEmpty())
        <p class="text-center">Tidak ada dokumentasi.</p>
    @else
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <div class="card-title">
                    Dokumentasi Divisi Edukasi
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th style="padding: 6px; width: 50px;">No</th>
                                <th style="padding: 6px;">Judul Dokumentasi</th>
                                <th style="padding: 6px;">Tanggal Kegiatan</th>
                                <th style="padding: 6px;">Link Foto Dokumentasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listDokumentasi as $dokumentasi)
                                <tr>
                                    <td style="padding: 6px">{{ $loop->iteration }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $dokumentasi->judul_dokumentasi }}</td>
                                    <td class="text-left" style="padding: 2px">{{ \Carbon\Carbon::parse($dokumentasi->tanggal)->translatedFormat('d F Y') }}</td>
                                    <td class="text-center" style="padding: 2px">
                                        <a href="{{ $dokumentasi->link_foto }}" target="_blank" class="text-primary">
                                            <i class="fa fa-link"></i> Lihat Dokumentasi
                                        </a>
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
