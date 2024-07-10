{{-- <x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-cyan text-white">
            <div class="card-title">
                Detail Data Taman Baca
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jenis_buku" class="control-label">Jenis Buku</label>
                            <input type="text" id="jenis_buku" class="form-control" value="{{ $tamanbaca->jenis_buku }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="total_buku" class="control-label">Total Buku</label>
                            <input type="text" id="total_buku" class="form-control" value="{{ $tamanbaca->total_buku }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bulan_pinjam" class="control-label">Bulan Pinjam</label>
                            <input type="text" id="bulan_pinjam" class="form-control" value="{{ $tamanbaca->bulan_pinjam }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="total_pinjam" class="control-label">Buku Dipinjam</label>
                            <input type="text" id="total_pinjam" class="form-control" value="{{ $tamanbaca->total_pinjam }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-12 d-flex justify-content-end">
                        <a href="{{ url('edukasi/tamanbaca') }}" class="btn btn-secondary mr-2">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                        <a href="{{ url('edukasi/tamanbaca/' . $tamanbaca->id . '/edit') }}" class="btn btn-primary mr-2">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form method="POST" action="{{ url('edukasi/tamanbaca/' . $tamanbaca->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.edukasi> --}}
