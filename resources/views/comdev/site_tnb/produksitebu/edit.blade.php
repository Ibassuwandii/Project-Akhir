<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title m-0"><b>Edit Data Produksi Gula Tebu Site TNB</b></h4>
        </div>
        <div class="card-body">
            <form action="{{ url('comdev/site_tnb/produksitebu', $produksitebu->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_dusun" class="font-weight-bold">Nama Dusun</label>
                            <input type="text" class="form-control @error('nama_dusun') is-invalid @enderror" name="nama_dusun" id="nama_dusun"
                                placeholder="Masukkan Nama Dusun" value="{{ old('nama_dusun', $produksitebu->nama_dusun) }}" required>
                            @error('nama_dusun')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_produksi" class="font-weight-bold">Tanggal Produksi</label>
                            <input type="date" class="form-control @error('tanggal_produksi') is-invalid @enderror" name="tanggal_produksi" id="tanggal_produksi"
                                value="{{ old('tanggal_produksi', $produksitebu->tanggal_produksi) }}" required>
                            @error('tanggal_produksi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="produksi" class="font-weight-bold">Produksi</label>
                            <input type="number" class="form-control @error('produksi') is-invalid @enderror" name="produksi" id="produksi"
                                placeholder="Masukkan Jumlah Produksi" value="{{ old('produksi', $produksitebu->produksi) }}" required>
                            @error('produksi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="hasil_penjualan" class="font-weight-bold">Hasil Penjualan</label>
                            <input type="number" class="form-control @error('hasil_penjualan') is-invalid @enderror" name="hasil_penjualan" id="hasil_penjualan"
                                placeholder="Masukkan Hasil Penjualan" value="{{ old('hasil_penjualan', $produksitebu->hasil_penjualan) }}" required>
                            @error('hasil_penjualan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class="font-weight-bold">Keterangan</label>
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan"
                                placeholder="Masukkan Keterangan">{{ old('keterangan', $produksitebu->keterangan) }}</textarea>
                            @error('keterangan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                    <a href="{{ url('comdev/site_tnb/produksitebu') }}" class="btn btn-secondary mr-2">
                        <i class="fas fa-times-circle"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-module.comdev>
