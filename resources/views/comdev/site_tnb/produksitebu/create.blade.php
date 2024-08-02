<x-module.comdev>
    <div class="">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Tambah Data Produksi Tebu Lokasi TNB</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('comdev/site_tnb/produksitebu') }}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_dusun" class="control-label">Nama Dusun</label>
                                <input type="text" name="nama_dusun" id="nama_dusun" class="form-control @error('nama_dusun') is-invalid @enderror" value="{{ old('nama_dusun') }}">
                                @error('nama_dusun')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_produksi" class="control-label">Tanggal Produksi</label>
                                <input type="date" name="tanggal_produksi" id="tanggal_produksi" class="form-control @error('tanggal_produksi') is-invalid @enderror" value="{{ old('tanggal_produksi') }}">
                                @error('tanggal_produksi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="produksi" class="control-label">Jumlah Produksi</label>
                                <input type="text" name="produksi" id="produksi" class="form-control @error('produksi') is-invalid @enderror" value="{{ old('produksi') }}">
                                @error('produksi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hasil_penjualan" class="control-label">Hasil Penjualan</label>
                                <input type="text" name="hasil_penjualan" id="hasil_penjualan" class="form-control @error('hasil_penjualan') is-invalid @enderror" value="{{ old('hasil_penjualan') }}">
                                @error('hasil_penjualan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="keterangan" class="control-label">Keterangan</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}">
                                @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="file_foto">Foto</label>
                                <input type="file" name="file_foto" class="form-control-file @error('file_foto') is-invalid @enderror" id="file_foto">
                                @error('file_foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @error('')
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                        <a href="{{ url('comdev/site_tnb/produksitebu') }}" class="btn btn-secondary mr-2">
                            <i class="fas fa-times-circle"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.comdev>
,,
