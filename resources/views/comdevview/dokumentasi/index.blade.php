<x-module.comdevview>
    @if ($listDokumentasi->isEmpty())
        <p class="text-center">Tidak ada dokumentasi.</p>
    @else
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <div class="card-title">
                    Dokumentasi Divisi Comdev
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th>No</th>
                                <th>Judul Dokumentasi</th>
                                <th>Tanggal Kegiatan</th>
                                <th>Link Foto Dokumentasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listDokumentasi as $dokumentasi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dokumentasi->judul_dokumentasi }}</td>
                                    <td>{{ $dokumentasi->tanggal_kegiatan }}</td>
                                    <td>
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
</x-module.comdevview>
