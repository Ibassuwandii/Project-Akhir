<x-module.comdev>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header bg-cyan text-white">
                        <h5 class="card-title">Edit Data Peta Divisi Comdev</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('comdev/peta/' . $peta->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="judul_peta" class="col-md-4 col-form-label text-md-right">Judul Peta</label>
                                <div class="col-md-6">
                                    <input type="text" name="judul_peta" id="judul_peta" class="form-control @error('judul_peta') is-invalid @enderror" value="{{ old('judul_peta', $peta->judul_peta) }}" required>
                                    @error('judul_peta')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_upload" class="col-md-4 col-form-label text-md-right">Tanggal Upload</label>
                                <div class="col-md-6">
                                    <input type="date" name="tanggal_upload" id="tanggal_upload" class="form-control @error('tanggal_upload') is-invalid @enderror" value="{{ old('tanggal_upload', $peta->tanggal_upload) }}" required>
                                    @error('tanggal_upload')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file_foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>
                                <div class="col-md-6">
                                    <input id="file_foto" type="file" class="form-control-file @error('file_foto') is-invalid @enderror" name="file_foto">
                                    @if ($peta->file_foto)
                                        <small class="form-text text-muted">File saat ini: {{ $peta->file_foto }}</small>
                                    @endif
                                    @error('file_foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                                    <a href="{{ url('comdev/peta') }}" class="btn btn-secondary mr-2">
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
</x-module.comdev>
