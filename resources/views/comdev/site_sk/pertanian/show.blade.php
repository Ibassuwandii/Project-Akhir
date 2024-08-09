<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title m-0"><b>Detail Data Pertanian Site SK</b></h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_desa" class="font-weight-bold">Nama Desa</label>
                        <p class="form-control-plaintext">{{ $pertanian->nama_desa }}</p>
                    </div>
                    <div class="form-group">
                        <label for="komuditas" class="font-weight-bold">Komuditas</label>
                        <p class="form-control-plaintext">{{ $pertanian->komuditas }}</p>
                    </div>
                    <div class="form-group">
                        <label for="luas_lahan" class="font-weight-bold">Luas Lahan</label>
                        <p class="form-control-plaintext">{{ $pertanian->luas_lahan }}</p>
                    </div>
                    <div class="form-group">
                        <label for="tanggal" class="font-weight-bold">Tanggal Kegiatan</label>
                        <p class="form-control-plaintext">{{ $pertanian->tanggal->translatedFormat('d F Y') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="hasil_sebelum" class="font-weight-bold">Produksi Sebelum</label>
                        <p class="form-control-plaintext">{{ $pertanian->hasil_sebelum }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jumlah_penerima_laki_laki" class="font-weight-bold">Jumlah Penerima Manfaat
                            Laki-laki</label>
                        <p class="form-control-plaintext">{{ $pertanian->jumlah_penerima_laki_laki }}</p>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_penerima_perempuan" class="font-weight-bold">Jumlah Penerima Manfaat
                            Perempuan</label>
                        <p class="form-control-plaintext">{{ $pertanian->jumlah_penerima_perempuan }}</p>
                    </div>
                    <div class="form-group">
                        <label for="hasil_target" class="font-weight-bold">Produksi Target</label>
                        <p class="form-control-plaintext">{{ $pertanian->hasil_target }}</p>
                    </div>
                    <div class="form-group">
                        <label for="hasil_akhir" class="font-weight-bold">Produksi Hasil</label>
                        <p class="form-control-plaintext">{{ $pertanian->hasil_akhir }}</p>
                    </div>
                    <div class="form-group">
                        <label for="keterangan" class="font-weight-bold">Keterangan</label>
                        <p class="form-control-plaintext">{{ $pertanian->keterangan }}</p>
                    </div>
                </div>
            </div>
            <a href="{{ url('comdev/site_sk/pertanian') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>
</x-module.comdev>
