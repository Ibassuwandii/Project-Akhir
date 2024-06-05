<x-module.edukasi>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-template.button.back-button url="{{ url('edukasi/laporan') }}" />
                <div class="card mt-2">
                    <div class="card-header bg-cyan text-white">
                        <h5 class="card-title">Edit Data Laporan</h5>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('edukasi/laporan/' . $report->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="jenis_laporan" class="col-md-4 col-form-label text-md-right">Jenis Laporan</label>
                                <div class="col-md-6">
                                    <input id="jenis_laporan" type="text" class="form-control" name="jenis_laporan" value="{{ $report->jenis_laporan }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="judul_laporan" class="col-md-4 col-form-label text-md-right">Judul Laporan</label>
                                <div class="col-md-6">
                                    <input id="judul_laporan" type="text" class="form-control" name="judul_laporan" value="{{ $report->judul_laporan }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pdf_file" class="col-md-4 col-form-label text-md-right">File PDF</label>
                                <div class="col-md-6">
                                    <input id="pdf_file" type="file" class="form-control-file" name="file_pdf">
                                    @if ($report->file_pdf)
                                        <small class="form-text text-muted">Current file: {{ $report->file_pdf }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_dibuat" class="col-md-4 col-form-label text-md-right">Tanggal Dibuat</label>
                                <div class="col-md-6">
                                    <input id="tanggal_dibuat" type="date" class="form-control" name="tanggal_dibuat" value="{{ $report->tanggal_dibuat }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
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
