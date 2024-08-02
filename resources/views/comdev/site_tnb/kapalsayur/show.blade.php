<x-module.comdev>
    <div class="card mt-2">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Detail Data Kapal Sayur Lokasi TNB</h5>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tanggal_trip" class="control-label">Tanggal Trip</label>
                            <input type="date" id="tanggal_trip" class="form-control" value="{{ $kapalsayur->tanggal_trip }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="jumlah_trip" class="control-label">Jumlah Trip</label>
                            <input type="text" id="jumlah_trip" class="form-control" value="{{ $kapalsayur->jumlah_trip }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="hasil_penjualan" class="control-label">Hasil Penjualan</label>
                            <input type="text" id="hasil_penjualan" class="form-control" value="{{ $kapalsayur->hasil_penjualan }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="keterangan" class="control-label">Keterangan</label>
                            <input type="text" id="keterangan" class="form-control" value="{{ $kapalsayur->keterangan }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="file_foto">Foto</label>
                            @if($kapalsayur->file_foto)
                                <img src="{{ asset('storage/' . $kapalsayur->file_foto) }}" alt="Foto" class="img-thumbnail mt-2" width="150">
                            @else
                                <p>Tidak ada foto</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                    <a href="{{ url('comdev/site_tnb/kapalsayur') }}" class="btn btn-secondary mr-2">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-module.comdev>
