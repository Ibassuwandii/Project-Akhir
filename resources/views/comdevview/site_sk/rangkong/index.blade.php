<x-module.comdevview>
    @if ($listRangkong->isEmpty())
        <p class="text-center">Tidak ada Data Rangkong.</p>
    @else
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <div class="card-title">Data Rangkong Site SK</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th style="width: 50px;">No</th>
                                <th>Nama Desa</th>
                                <th>Komuditas</th>
                                <th>Detail Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listRangkong as $rangkong)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $rangkong->nama_desa}}</td>
                                <td>{{ $rangkong->komuditas}}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#infoModal{{ $rangkong->id }}">
                                        <i class="fas fa-info-circle"></i> Detail
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal untuk Info Detail -->
                            <div class="modal fade" id="infoModal{{ $rangkong->id }}" tabindex="-1" role="dialog" aria-labelledby="infoModal{{ $rangkong->id }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info text-white">
                                            <h5 class="modal-title font-weight-bold" id="infoModal{{ $rangkong->id }}Label">Info Detail Data Rangkong Site SK</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Nama Desa:</strong> {{ $rangkong->nama_desa }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Komuditas:</strong> {{ $rangkong->komuditas }} <br>
                                                    <strong>Luas Lahan:</strong> {{ $rangkong->luas_lahan }} <br>
                                                    <strong>Hasil Sebelum:</strong> {{ $rangkong->hasil_sebelum }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Hasil Target:</strong> {{ $rangkong->hasil_target }} <br>
                                                    <strong>Hasil Akhir:</strong> {{ $rangkong->hasil_akhir }} <br>
                                                    <strong>Keterangan:</strong> {{ $rangkong->keterangan }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Jumlah Penerima Laki-laki:</strong> {{ $rangkong->jumlah_penerima_laki_laki }} <br>
                                                    <strong>Jumlah Penerima Perempuan:</strong> {{ $rangkong->jumlah_penerima_perempuan }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Dokumentasi:</strong>
                                                    @if ($rangkong->file_foto)
                                                        <a href="{{ url('public') }}/{{ $rangkong->file_foto }}" target="_blank">
                                                            <img src="{{ url('public') }}/{{ $rangkong->file_foto }}" alt="Gambar Rangkong" class="img-fluid" style="max-height: 400px; max-width: 100%;">
                                                        </a>
                                                    @else
                                                        <p>Tidak ada gambar</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
</x-module.comdevview>

<!-- CSS untuk styling gambar -->
<style>
    .img-fluid {
        display: block;
        margin: 0 auto;
        max-width: 100%;
        height: auto;
    }
</style>
