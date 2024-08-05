<x-module.edukasi>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-template.button.back-button url="edukasi/laporan" />
                <div class="card mt-2">
                    <div class="card-header bg-cyan text-white">
                        <h5 class="card-title">Detail Data Laporan</h5>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="jenis_laporan">Jenis Laporan:</label>
                            <!-- Pastikan $laporan adalah objek sebelum mengakses propertinya -->
                            <p>{{ is_object($laporan) ? $laporan->jenis_laporan : '' }}</p>
                        </div>

                        <div class="form-group">
                            <label for="Judul_laporan">Judul Laporan:</label>
                            <!-- Pastikan $laporan adalah objek sebelum mengakses propertinya -->
                            <p>{{ is_object($laporan) ? $laporan->judul_laporan : '' }}</p>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_dibuat">Tanggal Dibuat:</label>
                            <!-- Pastikan $laporan adalah objek sebelum mengakses propertinya -->
                            <p>{{ is_object($laporan) ? $laporan->tanggal_dibuat : '' }}</p>
                        </div>

                        <div class="form-group">
                            <label for="file_pdf">File PDF:</label>
                            <!-- Pastikan $laporan adalah objek sebelum mengakses propertinya -->
                            @if(is_object($laporan) && $laporan->file_pdf)
                                <a href="{{ asset('storage/app/' . $laporan->file_pdf) }}" target="_blank">Lihat PDF</a>
                            @else
                                <p>Tidak ada file PDF terlampir.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.edukasi>
