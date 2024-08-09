<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title m-0"><b>Edit Data Patroli Karhutla</b></h4>
        </div>
        <div class="card-body">
            <form action="{{ url('comdev/site_sk/karhutla/' . $karhutla->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="jangkauan_patroli" class="font-weight-bold">Jangkauan Patroli</label>
                    <input type="text" class="form-control @error('jangkauan_patroli') is-invalid @enderror"
                        name="jangkauan_patroli" id="jangkauan_patroli" value="{{ old('jangkauan_patroli', $karhutla->jangkauan_patroli) }}" required>
                    @error('jangkauan_patroli')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah_patroli" class="font-weight-bold">Jumlah Patroli</label>
                    <input type="text" class="form-control @error('jumlah_patroli') is-invalid @enderror"
                        name="jumlah_patroli" id="jumlah_patroli" value="{{ old('jumlah_patroli', $karhutla->jumlah_patroli) }}" required>
                    @error('jumlah_patroli')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal_patroli" class="font-weight-bold">Tanggal Patroli</label>
                    <input type="date" class="form-control @error('tanggal_patroli') is-invalid @enderror"
                        name="tanggal_patroli" id="tanggal_patroli" value="{{ old('tanggal_patroli', $karhutla->tanggal_patroli) }}" required>
                    @error('tanggal_patroli')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="titik_koordinat" class="font-weight-bold">Titik Koordinat</label>
                    <input type="text" class="form-control @error('titik_koordinat') is-invalid @enderror"
                        name="titik_koordinat" id="titik_koordinat" value="{{ old('titik_koordinat', $karhutla->titik_koordinat) }}" required>
                    @error('titik_koordinat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="luas_lahan" class="font-weight-bold">Luas Lahan</label>
                    <input type="text" class="form-control @error('luas_lahan') is-invalid @enderror"
                        name="luas_lahan" id="luas_lahan" value="{{ old('luas_lahan', $karhutla->luas_lahan) }}" required>
                    @error('luas_lahan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pemilik_lahan" class="font-weight-bold">Pemilik Lahan</label>
                    <input type="text" class="form-control @error('pemilik_lahan') is-invalid @enderror"
                        name="pemilik_lahan" id="pemilik_lahan" value="{{ old('pemilik_lahan', $karhutla->pemilik_lahan) }}" required>
                    @error('pemilik_lahan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sosialisasi" class="font-weight-bold">Sosialisasi</label>
                    <textarea class="form-control @error('sosialisasi') is-invalid @enderror" name="sosialisasi" id="sosialisasi"
                        rows="4">{{ old('sosialisasi', $karhutla->sosialisasi) }}</textarea>
                    @error('sosialisasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ url('comdev/site_sk/karhutla') }}" class="btn btn-secondary mr-2">
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
