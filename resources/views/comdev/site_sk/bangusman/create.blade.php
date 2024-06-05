<x-module.comdev>
    <div class="card mt-2">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Tambah Data Bangusman Lokasi SK</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('bangusman.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_kub" class="control-label">Nama KUB</label>
                                <input type="text" name="nama_kub" id="nama_kub" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_penerima" class="control-label">Nama Penerima Manfaat</label>
                                <input type="text" name="nama_penerima" id="nama_penerima" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jumlah_investasi" class="control-label">Jumlah Investasi</label>
                                <input type="text" name="jumlah_investasi" id="jumlah_investasi" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="komuditas" class="control-label">Komuditas</label>
                                <input type="text" name="komuditas" id="komuditas" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="masa_pengembalian" class="control-label">Masa Pengembalian Hasil</label>
                                <input type="text" name="masa_pengembalian" id="masa_pengembalian" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_investasi" class="control-label">Tanggal Investasi</label>
                                <input type="date" name="tanggal_investasi" id="tanggal_investasi" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- Input field untuk upload file jika diperlukan -->
                    {{-- <div class="form-group">
                        <label for="file_foto">Foto</label>
                        <input type="file" name="file_foto" class="form-control-file" id="file_foto">
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
