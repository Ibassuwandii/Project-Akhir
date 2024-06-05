<x-module.comdev>
    <x-template.button.back-button url="comdev/site_tnb/pertanian" />
    <div class="card mt-2">
         <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Edit Data Pertanian Lokasi TNB</h5>
         </div>
         <div class="card-body">
            <form action="{{url('comdev/site_tnb/pertanian', $pertanian->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Nama Desa:</label>
                            <input type="text" name="nama_desa" value="{{ $pertanian->nama_desa }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Komuditas:</label>
                            <input type="text" name="komuditas" value="{{ $pertanian->komuditas }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Luas Lahan:</label>
                            <input type="text" name="luas_lahan" value="{{ $pertanian->luas_lahan }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Hasil Sebelum:</label>
                            <input type="text" name="hasil_sebelum" value="{{ $pertanian->hasil_sebelum }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Hasil Target:</label>
                            <input type="text" name="hasil_target" value="{{ $pertanian->hasil_target }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Hasil Akhir:</label>
                            <input type="text" name="hasil_akhir" value="{{ $pertanian->hasil_akhir }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Keterangan:</label>
                            <input type="text" name="keterangan" value="{{ $pertanian->keterangan }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah Penerima Laki-Laki:</label>
                            <input type="text" name="jumlah_penerima_laki_laki" value="{{ $pertanian->jumlah_penerima_laki_laki }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah Penerima Perempuan:</label>
                            <input type="text" name="jumlah_penerima_perempuan" value="{{ $pertanian->jumlah_penerima_perempuan }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="file_foto">Foto</label>
                    <input type="file" name="file_foto" class="form-control-file" id="file_foto">
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

