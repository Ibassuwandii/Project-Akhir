<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title m-0"><b>Tambah Data Konservasi Mangrove</b></h4>
        </div>
        <div class="card-body">
            <form action="{{ url('comdev/site_sk/mangrove') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        {{-- <div class="form-group">
                            <label for="semester" class="font-weight-bold">Semester</label>
                            <input type="text" class="form-control @error('semester') is-invalid @enderror"
                                name="semester" id="semester" placeholder="Masukkan Semester"
                                value="{{ old('semester') }}" required>
                            @error('semester')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="bibit_disemai" class="font-weight-bold">Bibit Disemai</label>
                            <input type="number" class="form-control @error('bibit_disemai') is-invalid @enderror"
                                name="bibit_disemai" id="bibit_disemai" placeholder="Masukkan Bibit Disemai"
                                value="{{ old('bibit_disemai') }}" required>
                            @error('bibit_disemai')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bibit_mati" class="font-weight-bold">Bibit Mati</label>
                            <input type="number" class="form-control @error('bibit_mati') is-invalid @enderror"
                                name="bibit_mati" id="bibit_mati" placeholder="Masukkan Bibit Mati"
                                value="{{ old('bibit_mati') }}" required>
                            @error('bibit_mati')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bibit_hidup" class="font-weight-bold">Bibit Hidup</label>
                            <input type="number" class="form-control @error('bibit_hidup') is-invalid @enderror"
                                name="bibit_hidup" id="bibit_hidup" placeholder="Masukkan Bibit Hidup"
                                value="{{ old('bibit_hidup') }}" required>
                            @error('bibit_hidup')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal" class="font-weight-bold">Tanggal Penanaman</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                name="tanggal" id="tanggal" placeholder="Masukkan Tanggal"
                                value="{{ old('tanggal') }}" required>
                            @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="lokasi" class="font-weight-bold">Lokasi Penanaman</label>
                            <textarea class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" id="lokasi"
                                placeholder="Masukkan Lokasi Penanaman">{{ old('lokasi') }}</textarea>
                            @error('lokasi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ url('comdev/site_sk/mangrove') }}" class="btn btn-secondary mr-2">
                        <i class="fas fa-times-circle"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-module.comdev>
