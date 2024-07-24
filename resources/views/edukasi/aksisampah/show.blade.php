<x-module.edukasi>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-info text-white">
            <div class="card-title">
                Detail Data Aksi Sampah
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lokasi" class="control-label">Lokasi Kegiatan</label>
                            <input type="text" id="lokasi" class="form-control" value="{{ $aksisampah->lokasi }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jumlah_peserta" class="control-label">Jumlah Peserta</label>
                            <input type="text" id="jumlah_peserta" class="form-control" value="{{ $aksisampah->jumlah_peserta }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal" class="control-label">Tanggal Kegiatan</label>
                            <input type="date" id="tanggal" class="form-control" value="{{ $aksisampah->tanggal }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jenis_sampah" class="control-label">Jenis Sampah</label>
                            <input type="text" id="jenis_sampah" class="form-control" value="{{ $aksisampah->jenis_sampah }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jumlah_sampah" class="control-label">Jumlah Sampah</label>
                            <input type="text" id="jumlah_sampah" class="form-control" value="{{ $aksisampah->jumlah_sampah }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="instansi" class="control-label">Instansi Terlibat</label>
                            <textarea name="instansi" id="instansi" class="form-control @error('instansi') is-invalid @enderror" rows="4">{{ old('instansi', $aksisampah->instansi) }}</textarea>
                            <input type="text" id="instansi" class="form-control" value="{{ $aksisampah->instansi }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a href="{{ url('edukasi/aksisampah') }}" class="btn btn-secondary mr-2">
                            <i class="fas fa-arrow-circle-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.edukasi>
