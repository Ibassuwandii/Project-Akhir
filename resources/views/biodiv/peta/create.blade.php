<x-module.edukasi>
    <div class="">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Tambah Data Peta Divisi edukasi</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('edukasi/peta') }}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="judul_peta" class="control-label">Judul Peta</label>
                                <input type="text" name="judul_peta" id="judul_peta" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_upload" class="control-label">Tanggal Upload</label>
                                <input type="text" name="tanggal_upload" id="tanggal_upload" class="form-control">
                            </div>
                        </div>
                        @error('')

                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="file_foto" class="col-form-label">{{ __('Foto') }}</label>
                        <input id="file_foto" type="file" class="form-control-file @error('file_foto') is-invalid @enderror" name="file_foto" required>
                        @error('file_foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                            <a href="{{ url('edukasi/peta') }}" class="btn btn-secondary mr-2">
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
