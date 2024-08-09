<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title m-0"><b>Detail Data Rangkong Farm Site SK</b></h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label class="font-weight-bold">Nama Desa:</label>
                <p>{{ $rangkong->nama_desa }}</p>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Luas Lahan:</label>
                <p>{{ $rangkong->luas_lahan }}</p>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Komuditas:</label>
                <p>{{ $rangkong->komuditas }}</p>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Hasil Sebelum:</label>
                <p>{{ $rangkong->hasil_sebelum }}</p>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Hasil Target:</label>
                <p>{{ $rangkong->hasil_target }}</p>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Hasil Akhir:</label>
                <p>{{ $rangkong->hasil_akhir }}</p>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Keterangan:</label>
                <p>{{ $rangkong->keterangan }}</p>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Jumlah Penerima Laki-laki:</label>
                <p>{{ $rangkong->jumlah_penerima_laki_laki }}</p>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Jumlah Penerima Perempuan:</label>
                <p>{{ $rangkong->jumlah_penerima_perempuan }}</p>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ url('comdev/site_sk/rangkong') }}" class="btn btn-secondary mr-2">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</x-module.comdev>
