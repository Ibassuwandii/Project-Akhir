<x-module.comdev>
    <div class="">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Tambah Data Kapal Sayur Lokasi TNB</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('comdev/site_tnb/kapalsayur') }}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_trip" class="control-label">Tanggal Trip </label>
                                <input type="date" name="tanggal_trip" id="tanggal_trip" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jumlah_trip" class="control-label">Jumlah Trip</label>
                                <input type="text" name="jumlah_trip" id="jumlah_trip" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hasil_penjualan" class="control-label">Hasil Penjualan</label>
                                <input type="text" name="hasil_penjualan" id="hasil_penjualan" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="keterangan" class="control-label">Keterangan</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control">
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
                        <a href="{{ url('comdev/site_tnb/kapalsayur') }}" class="btn btn-secondary mr-2">
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
</x-module.divisi-comdev>
