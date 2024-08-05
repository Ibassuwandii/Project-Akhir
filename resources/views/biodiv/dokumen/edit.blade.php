<x-module.edukasi>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-2">
                    <div class="card-header bg-cyan text-white">
                        <h5 class="card-title">Edit Data Dokumen</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('edukasi/dokumen/' . $dokumen->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="judul_dokumen" class="col-md-4 col-form-label text-md-right">Judul Dokumen </label>
                                <div class="col-md-6">
                                    <input id="judul_dokumen" type="text" class="form-control" name="judul_dokumen" value="{{ old('judul_dokumen', $dokumen->judul_dokumen) }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal" class="col-md-4 col-form-label text-md-right">Tanggal</label>
                                <div class="col-md-6">
                                    <input id="tanggal" type="date" class="form-control" name="tanggal" value="{{ old('tanggal', $dokumen->tanggal) }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file_pdf" class="col-md-4 col-form-label text-md-right">File PDF</label>
                                <div class="col-md-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file_pdf" name="file_pdf">
                                        <label class="custom-file-label" for="file_pdf">Pilih file</label>
                                    </div>
                                    @if($dokumen->file_pdf)
                                        <small class="form-text text-muted">Current file: {{ $dokumen->file_pdf }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4 d-flex justify-content-end">
                                    <a href="{{ url('edukasi/dokumen') }}" class="btn btn-secondary mr-2">
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
