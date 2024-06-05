<x-module.comdev>
    <div class="">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Tambah Data Rangkong Lokasi SK</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('comdev/site_sk/rangkong') }}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_desa" class="control-label">Nama Desa</label>
                                <input type="text" name="nama_desa" id="nama_desa" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="komuditas" class="control-label">Komuditas</label>
                                <input type="text" name="komuditas" id="komuditas" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="luas_lahan" class="control-label">Luas Lahan</label>
                                <input type="text" name="luas_lahan" id="luas_lahan" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hasil_sebelum" class="control-label">Hasil Sebelum</label>
                                <input type="text" name="hasil_sebelum" id="hasil_sebelum" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hasil_target" class="control-label">Hasil Target</label>
                                <input type="text" name="hasil_target" id="hasil_target" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hasil_akhir" class="control-label">Hasil Akhir</label>
                                <input type="text" name="hasil_akhir" id="hasil_akhir" class="form-control">
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
                        @error('')

                        @enderror
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jumlah_penerima_perempuan" class="control-label">Jumlah Penerima Perempuan</label>
                                <input type="text" name="jumlah_penerima_perempuan" id="jumlah_penerima_perempuan" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jumlah_penerima_laki_laki" class="control-label">Jumlah Penerima Laki Laki</label>
                                <input type="text" name="jumlah_penerima_laki_laki" id="jumlah_penerima_laki_laki" class="form-control">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="file_foto">Foto</label>
                        <input type="file" name="file_foto" class="form-control-file" id="file_foto">
                    </div> --}}
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                            <a href="{{ url('comdev/site_sk/rangkong') }}" class="btn btn-secondary mr-2">
                                <i class="fas fa-times-circle"></i> Batal
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.divisi-comdev>
