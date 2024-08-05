<x-module.edukasi>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-2">
                    <div class="card-header bg-cyan text-white">
                        <h5 class="card-title">Tambah Data Dokumentasi</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('edukasi/dokumentasi') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="judul_dokumentasi" class="col-md-4 col-form-label text-md-right">Judul Dokumentasi</label>
                                <div class="col-md-6">
                                    <input id="judul_dokumentasi" type="text" class="form-control" name="judul_dokumentasi" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_kegiatan" class="col-md-4 col-form-label text-md-right">Tanggal Kegiatan</label>
                                <div class="col-md-6">
                                    <input id="tanggal_kegiatan" type="date" class="form-control" name="tanggal_kegiatan" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="link_foto" class="col-md-4 col-form-label text-md-right">Judul Dokumentasi</label>
                                <div class="col-md-6">
                                    <input id="link_foto" type="text" class="form-control" name="link_foto" required>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4 d-flex justify-content-end">
                                    <a href="{{ url('edukasi/dokumentasi') }}" class="btn btn-secondary mr-2">
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
            </div>
        </div>
    </div>
</x-module.edukasi>
