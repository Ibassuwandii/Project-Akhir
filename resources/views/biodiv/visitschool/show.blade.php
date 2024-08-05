<x-module.edukasi>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-cyan text-white">
            <div class="card-title">
                Detail Data Visit School
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_sekolah" class="control-label">Nama Sekolah</label>
                            <input type="text" id="nama_sekolah" class="form-control" value="{{ $visitschool->nama_sekolah }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lokasi" class="control-label">Lokasi Kegiatan</label>
                            <input type="text" id="lokasi" class="form-control" value="{{ $visitschool->lokasi }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="laki_laki" class="control-label">Laki-Laki</label>
                            <input type="text" id="laki_laki" class="form-control" value="{{ $visitschool->laki_laki }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="perempuan" class="control-label">Perempuan</label>
                            <input type="text" id="perempuan" class="form-control" value="{{ $visitschool->perempuan }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal" class="control-label">Tanggal Kunjungan</label>
                            <input type="date" id="tanggal" class="form-control" value="{{ $visitschool->tanggal }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="materi" class="control-label">Materi Kegiatan</label>
                            <textarea id="materi" class="form-control" rows="4" disabled>{{ $visitschool->materi }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a href="{{ url('edukasi/visitschool') }}" class="btn btn-secondary mr-2">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.edukasi>
