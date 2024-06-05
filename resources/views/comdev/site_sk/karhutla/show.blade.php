<x-module.comdev>
    <x-template.button.back-button url="comdev/site_sk/karhutla" />

    <div class="card mt-2">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title"><b>Detail Data Karhutla Lokasi SK</b></h5>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Jangkauan Patroli:</label>
                        <p>{{ $karhutla->jangkauan_patroli }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Tanggal Patroli:</label>
                        <p>{{ $karhutla->tanggal_patroli }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Titik Koordinat:</label>
                        <p>{{ $karhutla->titik_koordinat }}</p>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Luas Lahan:</label>
                        <p>{{ $karhutla->luas_lahan }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Pemilik Lahan:</label>
                        <p>{{ $karhutla->pemilik_lahan }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Jumlah Patroli:</label>
                        <p>{{ $karhutla->jumlah_patroli }}</p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="font-weight-bold">Sosialisasi:</label>
                        <p>{{ $karhutla->sosialisasi }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="font-weight-bold">Dokumentasi:</label><br>
                        @if ($karhutla->file_foto)
                            <a href="{{ url('public') }}/{{ $karhutla->file_foto }}" target="_blank">
                                <img src="{{ url('public') }}/{{ $karhutla->file_foto }}" alt="Gambar karhutla"
                                     style="max-width: 400px; max-height: 400px;" class="img-fluid">
                            </a>
                        @else
                            <p>Tidak ada gambar</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.comdev>
