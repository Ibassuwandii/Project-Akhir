<x-module.comdev>
    <x-template.button.back-button url="comdev/site_tnb/perikanan" />
    <div class="card mt-3">
         <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Edit Data Perikanan Lokasi TNB</h5>
         </div>
         <div class="card-body">
            <form action="{{url('comdev/site_tnb/perikanan', $perikanan->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_desa">Nama Desa:</label>
                            <input type="text" name="nama_desa" value="{{ $perikanan->nama_desa }}" class="form-control" id="nama_desa">
                        </div>
                        <div class="form-group">
                            <label for="komuditas">Komuditas:</label>
                            <input type="text" name="komuditas" value="{{ $perikanan->komuditas }}" class="form-control" id="komuditas">
                        </div>
                        <div class="form-group">
                            <label for="luas_kolam">Luas Kolam:</label>
                            <input type="text" name="luas_kolam" value="{{ $perikanan->luas_kolam }}" class="form-control" id="luas_kolam">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_penerima_laki_laki">Jumlah Penerima Laki-laki:</label>
                            <input type="text" name="jumlah_penerima_laki_laki" value="{{ $perikanan->jumlah_penerima_laki_laki }}" class="form-control" id="jumlah_penerima_laki_laki">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_penerima_perempuan">Jumlah Penerima Perempuan:</label>
                            <input type="text" name="jumlah_penerima_perempuan" value="{{ $perikanan->jumlah_penerima_perempuan }}" class="form-control" id="jumlah_penerima_perempuan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="hasil_sebelum">Hasil Sebelum:</label>
                            <input type="text" name="hasil_sebelum" value="{{ $perikanan->hasil_sebelum }}" class="form-control" id="hasil_sebelum">
                        </div>
                        <div class="form-group">
                            <label for="hasil_target">Hasil Target:</label>
                            <input type="text" name="hasil_target" value="{{ $perikanan->hasil_target }}" class="form-control" id="hasil_target">
                        </div>
                        <div class="form-group">
                            <label for="hasil_akhir">Hasil Akhir:</label>
                            <input type="text" name="hasil_akhir" value="{{ $perikanan->hasil_akhir }}" class="form-control" id="hasil_akhir">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan:</label>
                            <input type="text" name="keterangan" value="{{ $perikanan->keterangan }}" class="form-control" id="keterangan">
                        </div>
                        <div class="form-group">
                            <label for="file_foto">Foto:</label>
                            <input type="file" name="file_foto" class="form-control-file" id="file_foto">
                        </div>
                    </div>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
         </div>
    </div>
</x-module.comdev>
