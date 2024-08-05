<x-module.biodiv>
    <x-utils.notif />
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center py-4">
                <h4 class="m-0"><b>Tambah Data Survey Orangutan</b></h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('biodiv.orangutan.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal" class="form-label">Date</label>
                                <input type="text" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                                @error('tanggal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lokasi" class="form-label">Location</label>
                                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ old('lokasi') }}">
                                @error('lokasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tipe_habitat" class="form-label">Habitat Type</label>
                                <input type="text" class="form-control @error('tipe_habitat') is-invalid @enderror" id="tipe_habitat" name="tipe_habitat" value="{{ old('tipe_habitat') }}">
                                @error('tipe_habitat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jumlah_transek" class="form-label">Number of Transects</label>
                                <input type="number" class="form-control @error('jumlah_transek') is-invalid @enderror" id="jumlah_transek" name="jumlah_transek" value="{{ old('jumlah_transek') }}">
                                @error('jumlah_transek')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="total_panjang" class="form-label">Total Transect Length (m)</label>
                                <input type="text" class="form-control @error('total_panjang') is-invalid @enderror" id="total_panjang" name="total_panjang" value="{{ old('total_panjang') }}">
                                @error('total_panjang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jumlah_sarang" class="form-label">Number of Nests</label>
                                <input type="number" class="form-control @error('jumlah_sarang') is-invalid @enderror" id="jumlah_sarang" name="jumlah_sarang" value="{{ old('jumlah_sarang') }}">
                                @error('jumlah_sarang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kepadatan" class="form-label">Estimated Density per km</label>
                                <input type="text" class="form-control @error('kepadatan') is-invalid @enderror" id="kepadatan" name="kepadatan" value="{{ old('kepadatan') }}" step="0.01">
                                @error('kepadatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-module.biodiv>
