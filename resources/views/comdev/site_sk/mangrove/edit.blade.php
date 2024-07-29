<x-module.comdev>
    <div class="">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Edit Data Konservasi Mangrove Lokasi SK</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('comdev/site_sk/mangrove/' . $mangrove->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="semester" class="control-label">Semester</label>
                                <input type="text" name="semester" id="semester" class="form-control @error('semester') is-invalid @enderror" value="{{ old('semester', $mangrove->semester) }}">
                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bibit_disemai" class="control-label">Disemai</label>
                                <input type="text" name="bibit_disemai" id="bibit_disemai" class="form-control @error('bibit_disemai') is-invalid @enderror" value="{{ old('bibit_disemai', $mangrove->bibit_disemai) }}">
                                @error('bibit_disemai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bibit_hidup" class="control-label">Hidup</label>
                                <input type="text" name="bibit_hidup" id="bibit_hidup" class="form-control @error('bibit_hidup') is-invalid @enderror" value="{{ old('bibit_hidup', $mangrove->bibit_hidup) }}">
                                @error('bibit_hidup')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bibit_mati" class="control-label">Mati</label>
                                <input type="text" name="bibit_mati" id="bibit_mati" class="form-control @error('bibit_mati') is-invalid @enderror" value="{{ old('bibit_mati', $mangrove->bibit_mati) }}">
                                @error('bibit_mati')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="keterangan" class="control-label">Keterangan</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan', $mangrove->keterangan) }}">
                                @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal" class="control-label">Tanggal Penanaman</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal', $mangrove->tanggal) }}">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="file_foto" class="col-form-label">{{ __('Dokumen') }}</label>
                        <input id="file_foto" type="file" class="form-control-file @error('file_foto') is-invalid @enderror" name="file_foto">
                        @error('file_foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                        <a href="{{ url('comdev/site_sk/mangrove') }}" class="btn btn-secondary mr-2">
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
</x-module.comdev>
