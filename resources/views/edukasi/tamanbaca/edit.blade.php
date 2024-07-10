<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-cyan text-white">
            <div class="card-title">
                Edit Data Aksi Sampah
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('edukasi/tamanbaca/' . $tamanbaca->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_buku" class="control-label">Jenis Buku</label>
                                <input type="text" name="jenis_buku" id="jenis_buku" class="form-control @error('jenis_buku') is-invalid @enderror" value="{{ old('jenis_buku', $tamanbaca->jenis_buku) }}">
                                @error('jenis_buku')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="total_buku" class="control-label">Total Buku</label>
                                <input type="text" name="total_buku" id="total_buku" class="form-control @error('total_buku') is-invalid @enderror" value="{{ old('total_buku', $tamanbaca->total_buku) }}">
                                @error('total_buku')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bulan_pinjam" class="control-label">Bulan Dipinjam</label>
                                <input type="text" name="bulan_pinjam" id="bulan_pinjam" class="form-control @error('bulan_pinjam') is-invalid @enderror" value="{{ old('bulan_pinjam', $tamanbaca->bulan_pinjam) }}">
                                @error('bulan_pinjam')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="total_pinjam" class="control-label">Total Dipinjam</label>
                                <input type="text" name="total_pinjam" id="total_pinjam" class="form-control @error('total_pinjam') is-invalid @enderror" value="{{ old('total_pinjam', $tamanbaca->total_pinjam) }}">
                                @error('total_pinjam')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-12 d-flex justify-content-end">
                            <a href="{{ url('edukasi/tamanbaca') }}" class="btn btn-secondary mr-2">
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
</x-module.edukasi>
