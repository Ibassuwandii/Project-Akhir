<x-module.comdev>
    <x-template.button.back-button url="comdev/site_tnb/produksitebu" />
    <div class="card mt-2">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Detail Data Produksi Tebu Lokasi TNB</h5>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama_dusun" class="control-label">Nama Dusun</label>
                            <input type="text" id="nama_dusun" class="form-control" value="{{ $produksitebu->nama_dusun }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tanggal_produksi" class="control-label">Tanggal Produksi</label>
                            <input type="date" id="tanggal_produksi" class="form-control" value="{{ $produksitebu->tanggal_produksi }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="produksi" class="control-label">Jumlah Produksi</label>
                            <input type="text" id="produksi" class="form-control" value="{{ $produksitebu->produksi }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="hasil_penjualan" class="control-label">Hasil Penjualan</label>
                            <input type="text" id="hasil_penjualan" class="form-control" value="{{ $produksitebu->hasil_penjualan }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="keterangan" class="control-label">Keterangan</label>
                            <input type="text" id="keterangan" class="form-control" value="{{ $produksitebu->keterangan }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Gambar Produksi Tebu</label><br>
                            @if ($produksitebu->file_foto)
                                <a href="{{ url('public') }}/{{ $produksitebu->file_foto }}" target="_blank">
                                    <img src="{{ url('public') }}/{{ $produksitebu->file_foto }}" alt="Gambar Produksi Tebu"
                                         style="max-width: 400px; max-height: 400px;">
                                </a>
                            @else
                                <p>Tidak ada gambar</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.comdev>
