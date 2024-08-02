<x-module.comdev>
    <div class="">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Edit Data Tpom Lokasi SK</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('comdev/site_sk/tpom/' . $tpom->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jangkauan_patroli" class="control-label">Jangkauan Patroli</label>
                                <input type="text" name="jangkauan_patroli" id="jangkauan_patroli" class="form-control @error('jangkauan_patroli') is-invalid @enderror" value="{{ old('jangkauan_patroli', $tpom->jangkauan_patroli) }}">
                                @error('jangkauan_patroli')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_patroli" class="control-label">Tanggal Patroli</label>
                                <input type="date" name="tanggal_patroli" id="tanggal_patroli" class="form-control @error('tanggal_patroli') is-invalid @enderror" value="{{ old('tanggal_patroli', $tpom->tanggal_patroli) }}">
                                @error('tanggal_patroli')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="titik_koordinat" class="control-label">Titik Koordinat</label>
                                <input type="text" name="titik_koordinat" id="titik_koordinat" class="form-control @error('titik_koordinat') is-invalid @enderror" value="{{ old('titik_koordinat', $tpom->titik_koordinat) }}">
                                @error('titik_koordinat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="luas_lahan" class="control-label">Luas Lahan</label>
                                <input type="text" name="luas_lahan" id="luas_lahan" class="form-control @error('luas_lahan') is-invalid @enderror" value="{{ old('luas_lahan', $tpom->luas_lahan) }}">
                                @error('luas_lahan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pemilik_lahan" class="control-label">Pemilik Lahan</label>
                                <input type="text" name="pemilik_lahan" id="pemilik_lahan" class="form-control @error('pemilik_lahan') is-invalid @enderror" value="{{ old('pemilik_lahan', $tpom->pemilik_lahan) }}">
                                @error('pemilik_lahan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jumlah_patroli" class="control-label">Jumlah Patroli</label>
                                <input type="text" name="jumlah_patroli" id="jumlah_patroli" class="form-control @error('jumlah_patroli') is-invalid @enderror" value="{{ old('jumlah_patroli', $tpom->jumlah_patroli) }}">
                                @error('jumlah_patroli')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sosialisasi" class="control-label">Sosialisasi</label>
                                <textarea name="sosialisasi" id="sosialisasi" class="form-control @error('sosialisasi') is-invalid @enderror" rows="3">{{ old('sosialisasi', $tpom->sosialisasi) }}</textarea>
                                @error('sosialisasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- Uncomment if file upload is needed --}}
                        {{-- <div class="col-md-4">
                            <div class="form-group">
                                <label for="file_foto">Foto</label>
                                <input type="file" name="file_foto[]" class="form-control-file @error('file_foto.*') is-invalid @enderror" id="file_foto" multiple>
                                @error('file_foto.*')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                        <a href="{{ url('comdev/site_sk/tpom') }}" class="btn btn-secondary mr-2">
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
