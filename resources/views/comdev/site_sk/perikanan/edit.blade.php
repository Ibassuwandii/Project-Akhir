<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title m-0"><b>Edit Data Perikanan Site SK</b></h4>
        </div>
        <div class="card-body">
            <form action="{{ url('comdev/site_sk/perikanan/' . $perikanan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_desa" class="font-weight-bold">Nama Desa</label>
                            <input type="text" class="form-control @error('nama_desa') is-invalid @enderror" name="nama_desa" id="nama_desa"
                                placeholder="Masukkan Nama Desa" value="{{ old('nama_desa', $perikanan->nama_desa) }}" required>
                            @error('nama_desa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="komuditas" class="font-weight-bold">Komuditas</label>
                            <input type="text" class="form-control @error('komuditas') is-invalid @enderror" name="komuditas" id="komuditas"
                                placeholder="Masukkan Komuditas" value="{{ old('komuditas', $perikanan->komuditas) }}" required>
                            @error('komuditas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="luas_kolam" class="font-weight-bold">Luas Kolam</label>
                            <input type="text" class="form-control @error('luas_kolam') is-invalid @enderror" name="luas_kolam" id="luas_kolam"
                                placeholder="Masukkan luas kolam" value="{{ old('luas_kolam', $perikanan->luas_kolam) }}" required>
                            @error('luas_kolam')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hasil_sebelum" class="font-weight-bold">Produksi Sebelum</label>
                            <input type="number" class="form-control @error('hasil_sebelum') is-invalid @enderror" name="hasil_sebelum" id="hasil_sebelum"
                                placeholder="Masukkan Hasil Sebelum" value="{{ old('hasil_sebelum', $perikanan->hasil_sebelum) }}" required>
                            @error('hasil_sebelum')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hasil_target" class="font-weight-bold">Produksi Target</label>
                            <input type="number" class="form-control @error('hasil_target') is-invalid @enderror" name="hasil_target" id="hasil_target"
                                placeholder="Masukkan Hasil Target" value="{{ old('hasil_target', $perikanan->hasil_target) }}" required>
                            @error('hasil_target')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hasil_akhir" class="font-weight-bold">Produksi Hasil</label>
                            <input type="number" class="form-control @error('hasil_akhir') is-invalid @enderror" name="hasil_akhir" id="hasil_akhir"
                                placeholder="Masukkan Hasil Akhir" value="{{ old('hasil_akhir', $perikanan->hasil_akhir) }}" required>
                            @error('hasil_akhir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class="font-weight-bold">Keterangan</label>
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan"
                                placeholder="Masukkan Keterangan">{{ old('keterangan', $perikanan->keterangan) }}</textarea>
                            @error('keterangan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jumlah_penerima_laki_laki" class="font-weight-bold">Jumlah Penerima Manfaat Laki-laki</label>
                            <input type="number" class="form-control @error('jumlah_penerima_laki_laki') is-invalid @enderror" name="jumlah_penerima_laki_laki" id="jumlah_penerima_laki_laki"
                                placeholder="Masukkan Jumlah Penerima Laki-laki" value="{{ old('jumlah_penerima_laki_laki', $perikanan->jumlah_penerima_laki_laki) }}" required>
                            @error('jumlah_penerima_laki_laki')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jumlah_penerima_perempuan" class="font-weight-bold">Jumlah Penerima Manfaat Perempuan</label>
                            <input type="number" class="form-control @error('jumlah_penerima_perempuan') is-invalid @enderror" name="jumlah_penerima_perempuan" id="jumlah_penerima_perempuan"
                                placeholder="Masukkan Jumlah Penerima Perempuan" value="{{ old('jumlah_penerima_perempuan', $perikanan->jumlah_penerima_perempuan) }}" required>
                            @error('jumlah_penerima_perempuan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                    <a href="{{ url('comdev/site_sk/perikanan') }}" class="btn btn-secondary mr-2">
                        <i class="fas fa-times-circle"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-module.comdev>
