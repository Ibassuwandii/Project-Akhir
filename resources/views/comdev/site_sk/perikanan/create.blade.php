<x-module.comdev>
    <div class="">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Tambah Data Perikanan Lokasi SK</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('comdev/site_sk/perikanan') }}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_desa" class="control-label">Nama Desa</label>
                                <input type="text" name="nama_desa" id="nama_desa" class="form-control @error('nama_desa') is-invalid @enderror" value="{{ old('nama_desa') }}">
                                @error('nama_desa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="komuditas" class="control-label">Komuditas</label>
                                <input type="text" name="komuditas" id="komuditas" class="form-control @error('komuditas') is-invalid @enderror" value="{{ old('komuditas') }}">
                                @error('komuditas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="luas_kolam" class="control-label">Luas Kolam</label>
                                <input type="text" name="luas_kolam" id="luas_kolam" class="form-control @error('luas_kolam') is-invalid @enderror" value="{{ old('luas_kolam') }}">
                                @error('luas_kolam')
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
                                <label for="hasil_sebelum" class="control-label">Hasil Sebelum</label>
                                <input type="text" name="hasil_sebelum" id="hasil_sebelum" class="form-control @error('hasil_sebelum') is-invalid @enderror" value="{{ old('hasil_sebelum') }}">
                                @error('hasil_sebelum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hasil_target" class="control-label">Hasil Target</label>
                                <input type="text" name="hasil_target" id="hasil_target" class="form-control @error('hasil_target') is-invalid @enderror" value="{{ old('hasil_target') }}">
                                @error('hasil_target')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hasil_akhir" class="control-label">Hasil Akhir</label>
                                <input type="text" name="hasil_akhir" id="hasil_akhir" class="form-control @error('hasil_akhir') is-invalid @enderror" value="{{ old('hasil_akhir') }}">
                                @error('hasil_akhir')
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
                                <label for="jumlah_penerima_perempuan" class="control-label">Jumlah Penerima Perempuan</label>
                                <input type="text" name="jumlah_penerima_perempuan" id="jumlah_penerima_perempuan" class="form-control @error('jumlah_penerima_perempuan') is-invalid @enderror" value="{{ old('jumlah_penerima_perempuan') }}">
                                @error('jumlah_penerima_perempuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jumlah_penerima_laki_laki" class="control-label">Jumlah Penerima Laki Laki</label>
                                <input type="text" name="jumlah_penerima_laki_laki" id="jumlah_penerima_laki_laki" class="form-control @error('jumlah_penerima_laki_laki') is-invalid @enderror" value="{{ old('jumlah_penerima_laki_laki') }}">
                                @error('jumlah_penerima_laki_laki')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="file_foto" class="col-form-label">{{ __('Dokumen') }}</label>
                        <input id="file_foto" type="file" class="form-control-file @error('file_foto') is-invalid @enderror" name="file_foto">
                        @error('file_foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                        <a href="{{ url('comdev/site_sk/perikanan') }}" class="btn btn-secondary mr-2">
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
