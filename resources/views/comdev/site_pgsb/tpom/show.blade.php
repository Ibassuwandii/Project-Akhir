<x-module.comdev>
    <x-template.button.back-button url="comdev/site_pgsb/tpom"/>
    <div class="card mt-2">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title"><b>Detail Data Tpom Lokasi PGSB</b></h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Jangkauan Patroli:</label>
                        <p>{{ $tpom->jangkauan_patroli }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Tanggal Patroli:</label>
                        <p>{{ Carbon::parse($tpom->tanggal_patroli)->isoFormat('D MMMM YYYY') }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Titik Koordinat:</label>
                        <p>{{ $tpom->titik_koordinat }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Luas Lahan:</label>
                        <p>{{ $tpom->luas_lahan }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Pemilik Lahan:</label>
                        <p>{{ $tpom->pemilik_lahan }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold">Jumlah Patroli:</label>
                        <p>{{ $tpom->jumlah_patroli }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="font-weight-bold">Sosialisasi:</label>
                        <p>{{ $tpom->sosialisasi }}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label>Dokumentasi:</label><br>
                    @if ($tpom->file_foto)
                        <a href="{{ url('public') }}/{{ $tpom->file_foto }}" target="_blank">
                            <img src="{{ url('public') }}/{{ $tpom->file_foto }}" alt="Gambar tpom"
                                 style="max-width: 400px; max-height: 400px;">
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
