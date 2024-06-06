<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-cyan text-white">
            <div class="card-title">
                Tambah Data Aksi Sampah
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('edukasi/aksisampah') }}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lokasi" class="control-label">Lokasi Kegiatan</label>
                                <input type="text" name="lokasi" id="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi') }}">
                                @error('lokasi')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jumlah_peserta" class="control-label">Jumlah Peserta</label>
                                <input type="text" name="jumlah_peserta" id="jumlah_peserta" class="form-control @error('jumlah_peserta') is-invalid @enderror" value="{{ old('jumlah_peserta') }}">
                                @error('jumlah_peserta')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal" class="control-label">Tanggal Kegiatan</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_sampah" class="control-label">Jenis Sampah</label>
                                <select name="jenis_sampah" id="jenis_sampah" class="form-control @error('jenis_sampah') is-invalid @enderror">
                                    <option value="" disabled selected>Pilih Jenis Sampah</option>
                                    <option value="Organik">Organik</option>
                                    <option value="Anorganik">Anorganik</option>
                                    <option value="B3">Bahan Berbahaya dan Beracun (B3)</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                @error('jenis_sampah')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jumlah_sampah" class="control-label">Jumlah Sampah</label>
                                <input type="text" name="jumlah_sampah" id="jumlah_sampah" class="form-control @error('jumlah_sampah') is-invalid @enderror" value="{{ old('jumlah_sampah') }}">
                                @error('jumlah_sampah')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instansi" class="control-label">Instansi Terlibat</label>
                                <textarea name="instansi" id="instansi" class="form-control @error('instansi') is-invalid @enderror" rows="4">{{ old('instansi') }}</textarea>
                                @error('instansi')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-12 d-flex justify-content-end">
                            <a href="{{ url('edukasi/aksisampah') }}" class="btn btn-secondary mr-2">
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
</x-module.edukasi>
