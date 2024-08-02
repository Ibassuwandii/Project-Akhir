<x-module.comdev>
    <div class="card mt-2">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Edit Data Bangusman Lokasi SK</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('bangusman.update', $bangusman->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_kub" class="control-label">Nama KUB</label>
                                <input type="text" name="nama_kub" id="nama_kub" class="form-control @error('nama_kub') is-invalid @enderror" value="{{ old('nama_kub', $bangusman->nama_kub) }}">
                                @error('nama_kub')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_penerima" class="control-label">Nama Penerima Manfaat</label>
                                <input type="text" name="nama_penerima" id="nama_penerima" class="form-control @error('nama_penerima') is-invalid @enderror" value="{{ old('nama_penerima', $bangusman->nama_penerima) }}">
                                @error('nama_penerima')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jumlah_investasi" class="control-label">Jumlah Investasi</label>
                                <input type="text" name="jumlah_investasi" id="jumlah_investasi" class="form-control @error('jumlah_investasi') is-invalid @enderror" value="{{ old('jumlah_investasi', $bangusman->jumlah_investasi) }}">
                                @error('jumlah_investasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="komuditas" class="control-label">Komuditas</label>
                                <input type="text" name="komuditas" id="komuditas" class="form-control @error('komuditas') is-invalid @enderror" value="{{ old('komuditas', $bangusman->komuditas) }}">
                                @error('komuditas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="masa_pengembalian" class="control-label">Masa Pengembalian Hasil</label>
                                <input type="text" name="masa_pengembalian" id="masa_pengembalian" class="form-control @error('masa_pengembalian') is-invalid @enderror" value="{{ old('masa_pengembalian', $bangusman->masa_pengembalian) }}">
                                @error('masa_pengembalian')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_investasi" class="control-label">Tanggal Investasi</label>
                                <input type="date" name="tanggal_investasi" id="tanggal_investasi" class="form-control @error('tanggal_investasi') is-invalid @enderror" value="{{ old('tanggal_investasi', $bangusman->tanggal_investasi) }}">
                                @error('tanggal_investasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group col-md-6">
                        <label for="file_foto" class="col-form-label">{{ __('Dokumentasi') }}</label>
                        <input id="file_foto" type="file" class="form-control-file @error('file_foto') is-invalid @enderror" name="file_foto">
                        @error('file_foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                            <a href="{{ url('comdev/site_sk/bangusman') }}" class="btn btn-secondary mr-2">
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
</x-module.comdev>
