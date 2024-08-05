<x-module.edukasi>
    <x-utils.notif />
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-cyan text-white">
                <div class="card-title">
                    Detail Peta Divisi edukasi
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Judul Peta:</label>
                            <p>{{ $peta->judul_peta }}</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tanggal Upload:</label>
                            <p>{{ $peta->tanggal_upload }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Gambar Peta:</label><br>
                            @if ($peta->file_foto)
                                <a href="{{ url('public') }}/{{ $peta->file_foto }}" target="_blank">
                                    <img src="{{ url('public') }}/{{ $peta->file_foto }}" alt="Gambar Peta"
                                         style="max-width: 400px; max-height: 400px;">
                                </a>
                            @else
                                <p>Tidak ada gambar</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ url('edukasi/peta') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</x-module.edukasi>
