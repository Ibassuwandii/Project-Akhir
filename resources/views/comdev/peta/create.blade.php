<x-module.comdev>
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-cyan text-white">
                <h5 class="card-title mb-0">Tambah Data Peta Divisi Comdev</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('comdev/peta') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="judul_peta" class="control-label">Judul Peta</label>
                                <input type="text" name="judul_peta" id="judul_peta" class="form-control @error('judul_peta') is-invalid @enderror" value="{{ old('judul_peta') }}">
                                @error('judul_peta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_upload" class="control-label">Tanggal Upload</label>
                                <input type="date" name="tanggal_upload" id="tanggal_upload" class="form-control @error('tanggal_upload') is-invalid @enderror" value="{{ old('tanggal_upload') }}">
                                @error('tanggal_upload')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="file_foto" class="col-form-label">Foto</label>
                            <input type="file" name="file_foto" id="file_foto" class="form-control @error('file_foto') is-invalid @enderror" value="{{ old('file_foto') }}">
                            @error('file_foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="{{ url('comdev/peta') }}" class="btn btn-secondary mr-2">
                            <i class="fas fa-times-circle"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-module.comdev>
