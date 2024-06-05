<x-module.comdev>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-template.button.back-button url="comdev/laporan" />
                <div class="card mt-2">
                    <div class="card-header bg-cyan text-white">
                        <h5 class="card-title">Detail Data Laporan</h5>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Laporan:</label>
                            <p>{{ is_object($laporan) ? $laporan->nama : '' }}</p>
                        </div>

                        <div class="form-group">
                            <label for="judul">Judul Laporan:</label>
                            <p>{{ is_object($laporan) ? $laporan->judul : '' }}</p>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_dibuat">Tanggal Dibuat:</label>
                            <p>{{ is_object($laporan) ? $laporan->tanggal_dibuat : '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.comdev>
