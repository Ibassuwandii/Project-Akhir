<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title m-0"><b>Edit Data Rangkong Farm Site SK</b></h4>
        </div>
        <div class="card-body">
            <form action="{{ url('comdev/site_sk/rangkong', $rangkong->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_desa" class="font-weight-bold">Nama Desa</label>
                    <input type="text" class="form-control @error('nama_desa') is-invalid @enderror"
                           name="nama_desa" id="nama_desa" value="{{ old('nama_desa', $rangkong->nama_desa) }}" required>
                    @error('nama_desa')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="luas_lahan" class="font-weight-bold">Luas Lahan</label>
                    <input type="text" class="form-control @error('luas_lahan') is-invalid @enderror"
                           name="luas_lahan" id="luas_lahan" value="{{ old('luas_lahan', $rangkong->luas_lahan) }}" required>
                    @error('luas_lahan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="komuditas" class="font-weight-bold">Komuditas</label>
                    <input type="text" class="form-control @error('komuditas') is-invalid @enderror"
                           name="komuditas" id="komuditas" value="{{ old('komuditas', $rangkong->komuditas) }}" required>
                    @error('komuditas')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="hasil_sebelum" class="font-weight-bold">Hasil Sebelum</label>
                    <input type="text" class="form-control @error('hasil_sebelum') is-invalid @enderror"
                           name="hasil_sebelum" id="hasil_sebelum" value="{{ old('hasil_sebelum', $rangkong->hasil_sebelum) }}" required>
                    @error('hasil_sebelum')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="hasil_target" class="font-weight-bold">Hasil Target</label>
                    <input type="text" class="form-control @error('hasil_target') is-invalid @enderror"
                           name="hasil_target" id="hasil_target" value="{{ old('hasil_target', $rangkong->hasil_target) }}" required>
                    @error('hasil_target')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="hasil_akhir" class="font-weight-bold">Hasil Akhir</label>
                    <input type="text" class="form-control @error('hasil_akhir') is-invalid @enderror"
                           name="hasil_akhir" id="hasil_akhir" value="{{ old('hasil_akhir', $rangkong->hasil_akhir) }}" required>
                    @error('hasil_akhir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keterangan" class="font-weight-bold">Keterangan</label>
                    <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan"
                              rows="4">{{ old('keterangan', $rangkong->keterangan) }}</textarea>
                    @error('keterangan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah_penerima_laki_laki" class="font-weight-bold">Jumlah Penerima Laki-laki</label>
                    <input type="number" class="form-control @error('jumlah_penerima_laki_laki') is-invalid @enderror"
                           name="jumlah_penerima_laki_laki" id="jumlah_penerima_laki_laki" value="{{ old('jumlah_penerima_laki_laki', $rangkong->jumlah_penerima_laki_laki) }}" required>
                    @error('jumlah_penerima_laki_laki')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah_penerima_perempuan" class="font-weight-bold">Jumlah Penerima Perempuan</label>
                    <input type="number" class="form-control @error('jumlah_penerima_perempuan') is-invalid @enderror"
                           name="jumlah_penerima_perempuan" id="jumlah_penerima_perempuan" value="{{ old('jumlah_penerima_perempuan', $rangkong->jumlah_penerima_perempuan) }}" required>
                    @error('jumlah_penerima_perempuan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ url('comdev/site_sk/rangkong') }}" class="btn btn-secondary mr-2">
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
