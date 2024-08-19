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

    @if ($listPertanian->isEmpty())
        <p class="text-center">Tidak ada data pertanian.</p>
    @else
        <div class="card">
            <div class="card-header bg-primary text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div style="padding-left: 20px;">
                        <h4 class="card-title m-0"><b>Data Pertanian Site SK</b></h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th rowspan="2" style="padding: 6px; text-align: center;">No</th>
                                <th style="padding: 6px" width="50" rowspan="2"> Detail</th>
                                <th rowspan="2" style="padding: 6px; text-align: center;">Nama Desa</th>
                                <th rowspan="2" style="padding: 6px; text-align: center;">Tanggal</th>
                                <th rowspan="2" style="padding: 6px; text-align: center;">Komuditas</th>
                                <th colspan="4" style="text-align: center; padding: 6px;">Produksi</th>
                                <th colspan="2" style="text-align: center; padding: 6px;">Jumlah Penerima Manfaat</th>
                            </tr>
                            <tr style="text-align: center;">
                                <th style="padding: 6px;">Sebelum (Kg)</th>
                                <th style="padding: 6px;">Target (Kg)</th>
                                <th style="padding: 6px;">Hasil (Kg)</th>
                                <th style="padding: 6px;">Keterangan</th>
                                <th style="padding: 6px;">L</th>
                                <th style="padding: 6px;">P</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listPertanian as $pertanian)
                                <tr>
                                    <td style="padding: 2px;">{{ $loop->iteration }}</td>
                                    <td style="padding: 2px;">
                                        <button type="button" class="btn btn-info btn-sm btn-sm-custom" data-toggle="modal"
                                            data-target="#infoModal{{ $pertanian->id }}">
                                            <i class="fas fa-info-circle icon-small"></i>
                                        </button>
                                    </td>
                                    <td class="text-left" style="padding: 6px;">{{ $pertanian->nama_desa }}</td>
                                    <td class="text-left" style="padding: 6px;">
                                        {{ \Carbon\Carbon::parse($pertanian->tanggal)->translatedFormat('d F Y') }}
                                    </td>
                                    <td class="text-left" style="padding: 6px;">{{ $pertanian->komuditas }}</td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                        {{ $pertanian->hasil_sebelum }}</td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                        {{ $pertanian->hasil_target }}</td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                        {{ $pertanian->hasil_akhir }}</td>
                                    <td class="text-left {{ $pertanian->hasil_akhir >= $pertanian->hasil_target ? 'success' : 'failure' }}" style="padding: 6px;">
                                        {{ $pertanian->keterangan }}
                                    </td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                        {{ $pertanian->jumlah_penerima_laki_laki }}</td>
                                    <td class="text-right" style="padding: 2px 30px 1px 1px;">
                                        {{ $pertanian->jumlah_penerima_perempuan }}</td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="infoModal{{ $pertanian->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="infoModal{{ $pertanian->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info text-white">
                                                <h5 class="modal-title font-weight-bold"
                                                    id="infoModal{{ $pertanian->id }}Label">Info Detail Data Pertanian
                                                    Site SK</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Nama Desa:</strong> {{ $pertanian->nama_desa }}</p>
                                                <p><strong>Komuditas:</strong> {{ $pertanian->komuditas }}</p>
                                                <p><strong>Luas Lahan:</strong> {{ $pertanian->luas_lahan }}</p>
                                                <p><strong>Produksi Sebelum:</strong> {{ $pertanian->hasil_sebelum }}</p>
                                                <p><strong>Jumlah Penerima Laki-laki:</strong> {{ $pertanian->jumlah_penerima_laki_laki }}</p>
                                                <p><strong>Jumlah Penerima Perempuan:</strong> {{ $pertanian->jumlah_penerima_perempuan }}</p>
                                                <p><strong>Produksi Target:</strong> {{ $pertanian->hasil_target }}</p>
                                                <p><strong>Produksi Hasil:</strong> {{ $pertanian->hasil_akhir }}</p>
                                                <p><strong>Keterangan:</strong> {{ $pertanian->keterangan }}</p>
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
