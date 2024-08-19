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
                                <th style="padding: 6px">No</th>
                                <th style="padding: 6px">Judul Peta</th>
                                <th style="padding: 6px">Tanggal Upload</th>
                                <th style="padding: 6px">Gambar Peta</th
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listPeta as $peta)
                            <tr>
                                <td style="padding: 6px">{{ $loop->iteration }}</td>
                                <td class="text-left" style="padding: 2px">{{ $peta->judul_peta }}</td>
                                        <td class="text-left" style="padding: 2px">{{ $peta->formatted_tanggal_upload }}</td>
                                <td style="padding: 2px">
                                    @if ($peta->file_foto)
                                        <a href="{{ url('public') }}/{{ $peta->file_foto }}" target="_blank">
                                            <i class="fas fa-image"></i> Lihat Gambar
                                        </a>
                                    @else
                                        <p>Tidak ada gambar</p>
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

