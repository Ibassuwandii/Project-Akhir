<x-module.comdev>
    <div class="">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Detail Data Produksi Tebu Lokasi TNB</h5>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama_dusun" class="control-label">Nama Dusun</label>
                            <p class="form-control">{{ $data->nama_dusun }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tanggal_produksi" class="control-label">Tanggal Produksi </label>
                            <p class="form-control">{{ $data->tanggal_produksi }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="produksi" class="control-label">Jumlah Produksi</label>
                            <p class="form-control">{{ $data->produksi }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="hasil_penjualan" class="control-label">Hasil Penjualan</label>
                            <p class="form-control">{{ $data->hasil_penjualan }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="keterangan" class="control-label">Keterangan</label>
                            <p class="form-control">{{ $data->keterangan }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="file_foto">Foto</label>
                            @if($data->file_foto)
                                <img src="{{ asset('storage/'.$data->file_foto) }}" class="img-fluid" alt="Foto">
                            @else
                                <p class="form-control">Tidak ada foto</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    @error('')

                    @enderror
                </div>
                <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                    <a href="{{ url('comdev/site_tnb/produksitebu') }}" class="btn btn-secondary mr-2">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <a href="{{ url('comdev/site_tnb/produksitebu/'.$data->id.'/edit') }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-module.comdev>
