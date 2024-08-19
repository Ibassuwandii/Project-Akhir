<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title m-0"><b>Tambah Data Kapal Sayur Site TNB</b></h4>
        </div>
        <div class="card-body">
            <form action="{{ url('comdev/site_tnb/kapalsayur') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama" class="font-weight-bold">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                                placeholder="Masukkan Nama" value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="id_nama" class="font-weight-bold">ID Nama</label>
                            <input type="text" class="form-control @error('id_nama') is-invalid @enderror" name="id_nama" id="id_nama"
                                placeholder="Masukkan ID Nama" value="{{ old('id_nama') }}" required>
                            @error('id_nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="font-weight-bold">Jenis Kelamin</label>
                            <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin" required>
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_trip" class="font-weight-bold">Tanggal Trip</label>
                            <input type="date" class="form-control @error('tanggal_trip') is-invalid @enderror" name="tanggal_trip" id="tanggal_trip"
                                value="{{ old('tanggal_trip') }}" required>
                            @error('tanggal_trip')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jumlah_trip" class="font-weight-bold">Jumlah Trip</label>
                            <input type="number" class="form-control @error('jumlah_trip') is-invalid @enderror" name="jumlah_trip" id="jumlah_trip"
                                placeholder="Masukkan Jumlah Trip" value="{{ old('jumlah_trip') }}" required>
                            @error('jumlah_trip')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hasil_penjualan" class="font-weight-bold">Hasil Penjualan</label>
                            <input type="text" class="form-control @error('hasil_penjualan') is-invalid @enderror" name="hasil_penjualan" id="hasil_penjualan"
                                placeholder="Masukkan Hasil Penjualan" value="{{ old('hasil_penjualan') }}" required>
                            @error('hasil_penjualan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="iuran" class="font-weight-bold">Iuran</label>
                            <input type="text" class="form-control @error('iuran') is-invalid @enderror" name="iuran" id="iuran"
                                placeholder="Masukkan Jumlah Iuran" value="{{ old('iuran') }}" required>
                            @error('iuran')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                    <a href="{{ url('comdev/site_tnb/kapalsayur') }}" class="btn btn-secondary mr-2">
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
