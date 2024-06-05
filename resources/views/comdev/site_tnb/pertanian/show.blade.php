<x-module.comdev>
    <x-template.button.back-button url="comdev/site_tnb/pertanian" />
    <div class="card mt-2">
        <div class="card-header bg-cyan text-white">
            <h5 class="card-title"><b>Detail Data Pertanian Lokasi TNB</b></h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="font-weight-bold">Nama Desa:</label>
                        <div class="col-sm-6">
                            <p>{{ $pertanian->nama_desa }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="font-weight-bold">Komuditas:</label>
                        <div class="col-sm-6">
                            <p>{{ $pertanian->komuditas }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="font-weight-bold">Luas Lahan:</label>
                        <div class="col-sm-6">
                            <p>{{ $pertanian->luas_lahan }}</p>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="font-weight-bold">Jumlah Penerima Perempuan:</label>
                        <div class="col-sm-6">
                            <p>{{ $pertanian->jumlah_penerima_perempuan }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="font-weight-bold">Jumlah Penerima Laki-Laki:</label>
                        <div class="col-sm-6">
                            <p>{{ $pertanian->jumlah_penerima_laki_laki }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="font-weight-bold">Hasil Target:</label>
                        <div class="col-sm-6">
                            <p>{{ $pertanian->hasil_target }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="font-weight-bold">Hasil Sebelum:</label>
                        <div class="col-sm-6">
                            <p>{{ $pertanian->hasil_sebelum }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="font-weight-bold">Hasil Akhir:</label>
                        <div class="col-sm-6">
                            <p>{{ $pertanian->hasil_akhir }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="font-weight-bold">Keterangan:</label>
                        <div class="col-sm-6">
                            <p>{{ $pertanian->keterangan }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Gambar pertanian:</label><br>
                            @if ($pertanian->file_foto)
                                <a href="{{ url('public') }}/{{ $pertanian->file_foto }}" target="_blank">
                                    <img src="{{ url('public') }}/{{ $pertanian->file_foto }}" alt="Gambar pertanian"
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
    </div>
</x-module.comdev>
