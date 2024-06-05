<x-module.comdevview>
    @if ($listPerikanan->isEmpty())
        <p class="text-center">Tidak ada Data Perikanan.</p>
    @else
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <div class="card-title">Data Perikanan Site TNB</div>
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
                            @foreach ($listPerikanan as $perikanan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $perikanan->nama_desa}}</td>
                                <td>{{ $perikanan->komuditas}}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#infoModal{{ $perikanan->id }}">
                                        <i class="fas fa-info-circle"></i> Detail
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal untuk Info Detail -->
                            <div class="modal fade" id="infoModal{{ $perikanan->id }}" tabindex="-1" role="dialog" aria-labelledby="infoModal{{ $perikanan->id }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info text-white">
                                            <h5 class="modal-title font-weight-bold" id="infoModal{{ $perikanan->id }}Label">Info Detail Data Perikanan Site TNB</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Nama Desa:</strong> {{ $perikanan->nama_desa }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Komuditas:</strong> {{ $perikanan->komuditas }} <br>
                                                    <strong>Luas Kolam:</strong> {{ $perikanan->luas_kolam }} <br>
                                                    <strong>Hasil Sebelum:</strong> {{ $perikanan->hasil_sebelum }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Target Hasil:</strong> {{ $perikanan->hasil_target }} <br>
                                                    <strong>Hasil Akhir:</strong> {{ $perikanan->hasil_akhir }} <br>
                                                    <strong>Keterangan:</strong> {{ $perikanan->keterangan }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Jumlah Penerima Laki-laki:</strong> {{ $perikanan->jumlah_penerima_laki_laki }} <br>
                                                    <strong>Jumlah Penerima Perempuan:</strong> {{ $perikanan->jumlah_penerima_perempuan }}
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <strong>Dokumentasi:</strong>
                                                    @if ($perikanan->file_foto)
                                                    <a href="{{ url('public') }}/{{ $perikanan->file_foto }}" target="_blank">
                                                        <img src="{{ url('public') }}/{{ $perikanan->file_foto }}" alt="Gambar Perikanan"
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
