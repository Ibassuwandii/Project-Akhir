<x-module.comdevview>
    @if ($listTpom->isEmpty())
        <p class="text-center">Tidak ada Data Tpom.</p>
    @else
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <div class="card-title">Data TPOM Site PGSB</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th style="width: 50px;">No</th>
                                <th>Jangkauan Patroli</th>
                                <th>Pemilik Lahan</th>
                                <th>Tanggal Patroli</th>
                                <th>Info Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listTpom as $tpom)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tpom->jangkauan_patroli}}</td>
                                <td>{{ $tpom->pemilik_lahan}}</td>
                                <td>{{ $tpom->tanggal_patroli}}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#infoModal{{ $tpom->id }}">
                                        <i class="fas fa-info-circle"></i> Detail
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal untuk Info Detail -->
                            <div class="modal fade" id="infoModal{{ $tpom->id }}" tabindex="-1" role="dialog" aria-labelledby="infoModal{{ $tpom->id }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info text-white">
                                            <h5 class="modal-title font-weight-bold" id="infoModal{{ $tpom->id }}Label">Info Detail Data Perikanan Site SK</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Jangkauan Patroli:</strong> {{ $tpom->jangkauan_patroli }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Titik Koordinat:</strong> {{ $tpom->titik_koordinat }} <br>
                                                    <strong>Luas Lahan:</strong> {{ $tpom->luas_lahan }} <br>
                                                    <strong>Pemilik Lahan:</strong> {{ $tpom->pemilik_lahan }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Tanggal Patroli:</strong> {{ $tpom->tanggal_patroli }} <br>
                                                    <strong>Jumlah Patroli:</strong> {{ $tpom->jumlah_patroli }} <br>
                                                    <strong>Sosialisasi:</strong> {{ $tpom->sosialisasi }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Dokumentasi:</strong>
                                                    @if ($tpom->file_foto)
                                                    <a href="{{ url('public') }}/{{ $tpom->file_foto }}" target="_blank">
                                                        <img src="{{ url('public') }}/{{ $tpom->file_foto }}" alt="Gambar Perikanan"
                                                            style="max-width: 400px; max-height: 400px;">
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
