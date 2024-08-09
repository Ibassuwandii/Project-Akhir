<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title m-0"><b>Detail Data Patroli Tpom</b></h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="jangkauan_patroli" class="font-weight-bold">Jangkauan Patroli</label>
                <p id="jangkauan_patroli">{{ $tpom->jangkauan_patroli }}</p>
            </div>
            <div class="form-group">
                <label for="jumlah_patroli" class="font-weight-bold">Jumlah Patroli</label>
                <p id="jumlah_patroli">{{ $tpom->jumlah_patroli }}</p>
            </div>
            <div class="form-group">
                <label for="tanggal" class="font-weight-bold">Tanggal Patroli</label>
                <p class="form-control-plaintext">{{ $tpom->formatted_tanggal_patroli }}</p>
            </div>
            <div class="form-group">
                <label for="titik_koordinat" class="font-weight-bold">Titik Koordinat</label>
                <p id="titik_koordinat">{{ $tpom->titik_koordinat }}</p>
            </div>
            <div class="form-group">
                <label for="luas_lahan" class="font-weight-bold">Luas Lahan</label>
                <p id="luas_lahan">{{ $tpom->luas_lahan }}</p>
            </div>
            <div class="form-group">
                <label for="pemilik_lahan" class="font-weight-bold">Pemilik Lahan</label>
                <p id="pemilik_lahan">{{ $tpom->pemilik_lahan }}</p>
            </div>
            <div class="form-group">
                <label for="sosialisasi" class="font-weight-bold">Sosialisasi</label>
                <p id="sosialisasi">{{ $tpom->sosialisasi }}</p>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ url('comdev/site_sk/tpom') }}" class="btn btn-secondary mr-2">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</x-module.comdev>
