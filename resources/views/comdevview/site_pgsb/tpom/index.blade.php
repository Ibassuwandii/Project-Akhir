<x-module.comdevview>
    <style>
        .btn-sm-custom {
            font-size: 0.75rem; /* Ukuran font tombol yang lebih kecil */
            padding: 0.2rem 0.5rem; /* Padding tombol yang lebih kecil */
            border-radius: 0.2rem; /* Radius sudut tombol */
        }

        .icon-small {
            font-size: 0.75rem; /* Ukuran ikon yang lebih kecil */
        }
/*
        .success {
            color: rgb(5, 192, 5);
        }

        .failure {
            color: red;
        } */
    </style>

    @if ($listTpom->isEmpty())
        <p class="text-center">Tidak ada data Tpom.</p>
    @else
        <div class="card">
            <div class="card-header bg-primary text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div style="padding-left: 20px;">
                        <h4 class="card-title m-0"><b>Data Tpom Site PGSB</b></h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th style="padding: 6px" width="50" rowspan="2">No</th>
                                <th style="padding: 6px" width="50" rowspan="2">Detail</th>
                                <th rowspan="2" style="padding: 6px; text-align: center;">Jangkauan Patroli</th>
                                <th rowspan="2" style="padding: 6px; text-align: center;">Tanggal Patroli</th>
                                <th colspan="3" style="text-align: center; padding: 6px;">Insiden Kebakaran</th>
                            </tr>
                            <tr style="text-align: center;">
                                <th style="padding: 6px;">Titik Koordinat</th>
                                <th style="padding: 6px;">Luas Lahan (Ha)</th>
                                <th style="padding: 6px;">Pemilik Lahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listTpom as $tpom)
                                <tr>
                                    <td style="padding: 2px;">{{ $loop->iteration }}</td>
                                    <td style="padding: 2px;">
                                        <button type="button" class="btn btn-info btn-sm btn-sm-custom" data-toggle="modal"
                                            data-target="#infoModal{{ $tpom->id }}">
                                            <i class="fas fa-info-circle icon-small"></i>
                                        </button>
                                    </td>
                                    <td class="text-left" style="padding: 6px;">{{ $tpom->jangkauan_patroli }}</td>
                                    <td class="text-left" style="padding: 6px;">
                                        {{ \Carbon\Carbon::parse($tpom->tanggal_patroli)->translatedFormat('d F Y') }}
                                    </td>
                                    <td class="text-left" style="padding: 6px;">{{ $tpom->titik_koordinat }}</td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                        {{ $tpom->luas_lahan }}</td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                        {{ $tpom->pemilik_lahan }}</td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="infoModal{{ $tpom->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="infoModal{{ $tpom->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info text-white">
                                                <h5 class="modal-title font-weight-bold"
                                                    id="infoModal{{ $tpom->id }}Label">Info Detail Data tpom
                                                    Site SK</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Nama Desa:</strong> {{ $tpom->jangkauan_patroli }}</p>
                                                <p><strong>Jumlah Patroli:</strong> {{ $tpom->jumlah_patroli }}</p>
                                                <p><strong>titik_koordinat:</strong> {{ $tpom->titik_koordinat }}</p>
                                                <p><strong>Luas Lahan:</strong> {{ $tpom->luas_lahan }}</p>
                                                <p><strong>Pemilik Lahan:</strong> {{ $tpom->pemilik_lahan }}</p>
                                                <p><strong>Sosialisasi:</strong> {{ $tpom->sosialisasi }}</p>
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
