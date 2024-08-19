<x-module.comdev>
    <x-template.button.back-button url="comdev/site_sk/bangusman" />
    <div class="card mt-2">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title">Detail Data Bangusman Lokasi SK</h5>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_kub" class="control-label">Nama KUB</label>
                            <p>{{ $bangusman->nama_kub }}</p>
                        </div>
                        <div class="form-group">
                            <label for="nama_penerima" class="control-label">Nama Penerima Manfaat</label>
                            <p>{{ $bangusman->nama_penerima }}</p>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_investasi" class="control-label">Jumlah Investasi</label>
                            <p>{{ $bangusman->jumlah_investasi }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="komuditas" class="control-label">Komuditas</label>
                            <p>{{ $bangusman->komuditas }}</p>
                        </div>
                        <div class="form-group">
                            <label for="masa_pengembalian" class="control-label">Masa Pengembalian Hasil</label>
                            <p>{{ $bangusman->masa_pengembalian }}</p>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_investasi" class="font-weight-bold">Tanggal Kegiatan</label>
                            <p class="form-control-plaintext">{{ \Carbon\Carbon::parse($bangusman->tanggal_investasi)->translatedFormat('d F Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.comdev>
