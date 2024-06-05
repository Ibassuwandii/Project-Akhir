<x-module.comdev>
    <div class="">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Tambah Data Konservasi Mangrove Lokasi PGSB</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('comdev/site_pgsb/mangrove') }}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="semester" class="control-label">Semester </label>
                                <input type="text" name="semester" id="semester" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bibit_disemai" class="control-label">Disemai</label>
                                <input type="text" name="bibit_disemai" id="bibit_disemai" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bibit_hidup" class="control-label">Hidup</label>
                                <input type="text" name="bibit_hidup" id="bibit_hidup" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="bibit_mati" class="control-label">Mati</label>
                                <input type="text" name="bibit_mati" id="bibit_mati" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="keterangan" class="control-label">Keterangan</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal" class="control-label">Tanggal Penanaman</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sosialisasi" class="control-label">Sosialisasi</label>
                                <input type="text" name="sosialisasi" id="sosialisasi" class="form-control">
                            </div>
                        </div> --}}
                        @error('')

                        @enderror
                    {{-- </div> --}}
                    {{-- <div class="form-group">
                        <label for="file_foto">Foto</label>
                        <input type="file" name="file_foto" class="form-control-file" id="file_foto">
                    </div> --}}
                    </div>
                    <div class="col-md-8 offset-md-4 d-flex justify-content-end">
                        <a href="{{ url('comdev/site_pgsb/mangrove') }}" class="btn btn-secondary mr-2">
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
</x-module.divisi-comdev>
