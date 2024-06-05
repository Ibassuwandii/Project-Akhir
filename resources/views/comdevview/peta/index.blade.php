<x-module.comdevview>
    @if ($listPeta->isEmpty())
        <p class="text-center">Tidak ada Peta.</p>
    @else
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <div class="card-title">
                    Peta Divisi Comdev
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th style="width: 50px;">No</th>
                                <th>Judul Peta</th>
                                <th>Tanggal Upload</th>
                                <th>Gambar Peta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listPeta as $peta)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $peta->judul_peta }}</td>
                                <td>{{ $peta->tanggal_upload }}</td>
                                <td>
                                    @if ($peta->file_foto)
                                        <a href="{{ url('public') }}/{{ $peta->file_foto }}" target="_blank" class="text-primary">
                                            <i class="fas fa-image"></i> Lihat Gambar
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

