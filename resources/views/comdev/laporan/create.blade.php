<x-module.comdev>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-2">
                    <div class="card-header bg-cyan text-white">
                        <h5 class="card-title">Tambah Data Laporan</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('comdev/laporan') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="jenis_laporan" class="col-md-4 col-form-label text-md-right">Jenis Laporan</label>
                                <div class="col-md-6">
                                    <input id="jenis_laporan" type="text" class="form-control @error('jenis_laporan') is-invalid @enderror" name="jenis_laporan" value="{{ old('jenis_laporan') }}" required autofocus>
                                    @error('jenis_laporan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="judul_laporan" class="col-md-4 col-form-label text-md-right">Judul Laporan</label>
                                <div class="col-md-6">
                                    <input id="judul_laporan" type="text" class="form-control @error('judul_laporan') is-invalid @enderror" name="judul_laporan" value="{{ old('judul_laporan') }}" required>
                                    @error('judul_laporan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file_pdf" class="col-md-4 col-form-label text-md-right">File PDF</label>
                                <div class="col-md-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('file_pdf') is-invalid @enderror" id="file_pdf" name="file_pdf" required>
                                        <label class="custom-file-label" for="file_pdf">Pilih file</label>
                                    </div>
                                    @error('file_pdf')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_dibuat" class="col-md-4 col-form-label text-md-right">Tanggal Dibuat</label>
                                <div class="col-md-6">
                                    <input id="tanggal_dibuat" type="date" class="form-control @error('tanggal_dibuat') is-invalid @enderror" name="tanggal_dibuat" value="{{ old('tanggal_dibuat') }}" required>
                                    @error('tanggal_dibuat')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4 d-flex justify-content-end">
                                    <a href="{{ url('comdev/laporan') }}" class="btn btn-secondary mr-2">
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
