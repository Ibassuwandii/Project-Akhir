<x-module.comdev>
    <div class="">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Edit Data Produksi Tebu Lokasi TNB</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('comdev/site_tnb/produksitebu/'.$data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_dusun" class="control-label">Nama Dusun</label>
                                <input type="text" name="nama_dusun" id="nama_dusun" class="form-control" value="{{ old('nama_dusun', $data->nama_dusun) }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_produksi" class="control-label">Tanggal Produksi </label>
                                <input type="date" name="tanggal_produksi" id="tanggal_produksi" class="form-control" value="{{ old('tanggal_produksi', $data->tanggal_produksi) }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="produksi" class="control-label">Jumlah Produksi</label>
                                <input type="text" name="produksi" id="produksi" class="form-control" value="{{ old('produksi', $data->produksi) }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hasil_penjualan" class="control-label">Hasil Penjualan</label>
                                <input type="text" name="hasil_penjualan" id="hasil_penjualan" class="form-control" value="{{ old('hasil_penjualan', $data->hasil_penjualan) }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="keterangan" class="control-label">Keterangan</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ old('keterangan', $data->keterangan) }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="file_foto">Foto</label>
                                <input type="file" name="file_foto" class="form-control-file" id="file_foto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @error('')

                        @enderror
                    </div>
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
