<x-module.edukasi>
     <div class="container">
        <div class="row justify-content-center">
             <div class="col-md-8">
                <x-template.button.back-button url="edukasi/laporan" />
                <div class="card mt-2">


                    <div class="card-header bg-cyan text-white">
                        <h5 class="card-title">Edit Data Laporan</h5>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('laporan.update', $laporan->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Laporan</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="nama" value="{{ $laporan->nama }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="judul" class="col-md-4 col-form-label text-md-right">Judul Laporan</label>
                                <div class="col-md-6">
                                    <input id="judul" type="text" class="form-control" name="judul" value="{{ $laporan->judul }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pdf_file" class="col-md-4 col-form-label text-md-right">File PDF</label>
                                <div class="col-md-6">
                                    <input id="pdf_file" type="file" class="form-control-file" name="file_pdf">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>

                        </form>
                    </div>

            </div>
        </div>
    </div>
     </div>
</x-module.edukasi>
