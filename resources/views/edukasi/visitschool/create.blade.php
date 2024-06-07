<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-cyan text-white">
            <div class="card-title">
                Tambah DataVisit School
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('edukasi/visitschool') }}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_sekolah" class="control-label">Nama Sekolah</label>
                                <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control @error('nama_sekolah') is-invalid @enderror" value="{{ old('nama_sekolah') }}">
                                @error('nama_sekolah')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lokasi" class="control-label">Lokasi Kegiatan</label>
                                <input type="text" name="lokasi" id="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi') }}">
                                @error('lokasi')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="laki_laki" class="control-label">Laki-Laki</label>
                                <input type="text" name="laki_laki" id="laki_laki" class="form-control @error('laki_laki') is-invalid @enderror" value="{{ old('laki_laki') }}">
                                @error('laki_laki')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="perempuan" class="control-label">Perempuan</label>
                                <input type="text" name="perempuan" id="perempuan" class="form-control @error('perempuan') is-invalid @enderror" value="{{ old('perempuan') }}">
                                @error('perempuan')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal" class="control-label">Tanggal Kunjungan</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="materi" class="control-label">Materi Kegiatan</label>
                                <textarea name="materi" id="materi" class="form-control @error('materi') is-invalid @enderror" rows="4">{{ old('materi') }}</textarea>
                                @error('materi')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-12 d-flex justify-content-end">
                            <a href="{{ url('edukasi/visitschool') }}" class="btn btn-secondary mr-2">
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
