<x-module.comdevview>
    @if ($listBangusman->isEmpty())
        <p class="text-center">Tidak ada Data Pertanian.</p>
    @else
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <div class="card-title">Data Ayo Bang Usman Site SK</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th style="width: 50px;">No</th>
                                <th>Nama KUB</th>
                                <th>Tanggal Investasi</th>
                                <th>Komuditas</th>
                                <th>Detail Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listBangusman as $bangusman)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bangusman->nama_kub}}</td>
                                <td>{{ $bangusman->tanggal_investasi}}</td>
                                <td>{{ $bangusman->komuditas}}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#infoModal{{ $bangusman->id }}">
                                        <i class="fas fa-info-circle"></i> Detail
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal untuk Info Detail -->
                            <div class="modal fade" id="infoModal{{ $bangusman->id }}" tabindex="-1" role="dialog" aria-labelledby="infoModal{{ $bangusman->id }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info text-white">
                                            <h5 class="modal-title font-weight-bold" id="infoModal{{ $bangusman->id }}Label">Info Detail Data Pertanian Site SK</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Nama KUB:</strong> {{ $bangusman->nama_kub }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Nama Penerima:</strong> {{ $bangusman->nama_penerima }} <br>
                                                    <strong>Tanggal Investasi:</strong> {{ $bangusman->tanggal_investasi }} <br>
                                                    <strong>Jumlah Investasi:</strong> {{ $bangusman->jumlah_investasi }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Komuditas:</strong> {{ $bangusman->komuditas }} <br>
                                                    <strong>Masa Pengembalian:</strong> {{ $bangusman->masa_pengembalian }} <br>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Dokumentasi:</strong>
                                                    @if ($bangusman->file_foto)
                                                        <a href="{{ url('public') }}/{{ $bangusman->file_foto }}" target="_blank">
                                                            <img src="{{ url('public') }}/{{ $bangusman->file_foto }}" alt="Gambar Pertanian" class="img-fluid" style="max-height: 400px; max-width: 100%;">
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
