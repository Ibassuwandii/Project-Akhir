<x-module.comdevview>
    @if ($listPertanian->isEmpty())
        <p class="text-center">Tidak ada Data Pertanian.</p>
    @else
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <div class="card-title">Data Pertanian Site TNB</div>
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
                            @foreach ($listPertanian as $pertanian)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pertanian->nama_desa}}</td>
                                <td>{{ $pertanian->komuditas}}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#infoModal{{ $pertanian->id }}">
                                        <i class="fas fa-info-circle"></i> Detail
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal untuk Info Detail -->
                            <div class="modal fade" id="infoModal{{ $pertanian->id }}" tabindex="-1" role="dialog" aria-labelledby="infoModal{{ $pertanian->id }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info text-white">
                                            <h5 class="modal-title font-weight-bold" id="infoModal{{ $pertanian->id }}Label">Info Detail Data Pertanian Site TNB</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Nama Desa:</strong> {{ $pertanian->nama_desa }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Komuditas:</strong> {{ $pertanian->komuditas }} <br>
                                                    <strong>Luas Lahan:</strong> {{ $pertanian->luas_lahan }} <br>
                                                    <strong>Hasil Sebelum:</strong> {{ $pertanian->hasil_sebelum }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Hasil Target:</strong> {{ $pertanian->hasil_target }} <br>
                                                    <strong>Hasil Akhir:</strong> {{ $pertanian->hasil_akhir }} <br>
                                                    <strong>Keterangan:</strong> {{ $pertanian->keterangan }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Jumlah Penerima Laki-laki:</strong> {{ $pertanian->jumlah_penerima_laki_laki }} <br>
                                                    <strong>Jumlah Penerima Perempuan:</strong> {{ $pertanian->jumlah_penerima_perempuan }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Dokumentasi:</strong>
                                                    @if ($pertanian->file_foto)
                                                        <a href="{{ url('public') }}/{{ $pertanian->file_foto }}" target="_blank">
                                                            <img src="{{ url('public') }}/{{ $pertanian->file_foto }}" alt="Gambar Pertanian" class="img-fluid" style="max-height: 400px; max-width: 100%;">
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
