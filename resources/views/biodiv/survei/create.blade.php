<x-module.biodiv>
    <x-utils.notif />
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title m-0">Tambah Data Antropogenik</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('biodiv/antropogenik') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="bulan">Bulan</label>
                            <input type="text" class="form-control @error('bulan') is-invalid @enderror" id="bulan" name="bulan" value="{{ old('bulan') }}">
                            @error('bulan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="metode">Metode</label>
                            <input type="text" class="form-control @error('metode') is-invalid @enderror" id="metode" name="metode" value="{{ old('metode') }}" >
                            @error('metode')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="observasi">Kategori Observasi</label>
                            <input type="text" class="form-control @error('observasi') is-invalid @enderror" id="observasi" name="observasi" value="{{ old('observasi') }}" >
                            @error('observasi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pengamatan">Pengamatan</label>
                            <input type="text" class="form-control @error('pengamatan') is-invalid @enderror" id="pengamatan" name="pengamatan" value="{{ old('pengamatan') }}" >
                            @error('pengamatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kuantitas">Kuantitas</label>
                        <input type="number" class="form-control @error('kuantitas') is-invalid @enderror" id="kuantitas" name="kuantitas" value="{{ old('kuantitas') }}" >
                        @error('kuantitas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                        <a href="{{ url('biodiv/antropogenik') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-module.biodiv>
