<x-module.comdev>
    <x-template.button.back-button url="comdev/site_sk/pertanian" />
    <div class="card mt-2">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Edit Data Pertanian Lokasi SK</h5>
        </div>
        <div class="card-body">
            <form action="{{ url('comdev/site_sk/pertanian', $pertanian->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Nama Desa:</label>
                            <input type="text" name="nama_desa" value="{{ old('nama_desa', $pertanian->nama_desa) }}" class="form-control">
                            @error('nama_desa')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Komoditas:</label>
                            <input type="text" name="komoditas" value="{{ old('komoditas', $pertanian->komoditas) }}" class="form-control">
                            @error('komoditas')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Luas Lahan:</label>
                            <input type="text" name="luas_lahan" value="{{ old('luas_lahan', $pertanian->luas_lahan) }}" class="form-control">
                            @error('luas_lahan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Hasil Sebelum:</label>
                            <input type="text" name="hasil_sebelum" value="{{ old('hasil_sebelum', $pertanian->hasil_sebelum) }}" class="form-control">
                            @error('hasil_sebelum')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Hasil Target:</label>
                            <input type="text" name="hasil_target" value="{{ old('hasil_target', $pertanian->hasil_target) }}" class="form-control">
                            @error('hasil_target')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Hasil Akhir:</label>
                            <input type="text" name="hasil_akhir" value="{{ old('hasil_akhir', $pertanian->hasil_akhir) }}" class="form-control">
                            @error('hasil_akhir')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Keterangan:</label>
                            <input type="text" name="keterangan" value="{{ old('keterangan', $pertanian->keterangan) }}" class="form-control">
                            @error('keterangan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah Penerima Laki-Laki:</label>
                            <input type="text" name="jumlah_penerima_laki_laki" value="{{ old('jumlah_penerima_laki_laki', $pertanian->jumlah_penerima_laki_laki) }}" class="form-control">
                            @error('jumlah_penerima_laki_laki')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah Penerima Perempuan:</label>
                            <input type="text" name="jumlah_penerima_perempuan" value="{{ old('jumlah_penerima_perempuan', $pertanian->jumlah_penerima_perempuan) }}" class="form-control">
                            @error('jumlah_penerima_perempuan')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="file_foto">Foto</label>
                    <input type="file" name="file_foto" class="form-control-file" id="file_foto">
                    @error('file_foto')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.comdev>
