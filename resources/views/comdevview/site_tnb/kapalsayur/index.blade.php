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

    @if ($listKapalsayur->isEmpty())
        <p class="text-center">Tidak ada data Kapalsayur.</p>
    @else
        <div class="card">
            <div class="card-header bg-primary text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div style="padding-left: 20px;">
                        <h4 class="card-title m-0"><b>Data Kapalsayur Site SK</b></h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th style="padding: 6px" width="50">No</th>
                                {{-- <th style="padding: 6px" width="50">Aksi</th> --}}
                                <th style="padding: 6px">Nama</th>
                                <th style="padding: 6px">ID Nama</th>
                                <th style="padding: 6px">Jenis Kelamin</th>
                                <th style="padding: 6px">Tanggal Trip</th>
                                <th style="padding: 6px">Jumlah Trip</th>
                                <th style="padding: 6px">Hasil Penjualan</th>
                                <th style="padding: 6px">Iuran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listKapalsayur as $kapalsayur)
                                <tr>
                                    <td style="padding: 2px;">{{ $loop->iteration }}</td>
                                    {{-- <td style="padding: 2px;">
                                        <button type="button" class="btn btn-info btn-sm btn-sm-custom" data-toggle="modal"
                                            data-target="#infoModal{{ $kapalsayur->id }}">
                                            <i class="fas fa-info-circle icon-small"></i>
                                        </button>
                                    </td> --}}
                                    <td style="padding: 6px" class="text-left">{{ $kapalsayur->nama }}</td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $kapalsayur->id_nama }}</td>
                                    <td style="padding: 6px" class="text-left">{{ $kapalsayur->jenis_kelamin }}</td>
                                    <td class="text-left" style="padding: 6px;">
                                        {{ \Carbon\Carbon::parse($kapalsayur->tanggal_trip)->translatedFormat('d F Y') }}
                                    </td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $kapalsayur->jumlah_trip }}</td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $kapalsayur->hasil_penjualan }}</td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $kapalsayur->iuran }}</td>
                                </tr>
                                <!-- Modal -->
                                {{-- <div class="modal fade" id="infoModal{{ $kapalsayur->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="infoModal{{ $kapalsayur->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-info text-white">
                                                <h5 class="modal-title font-weight-bold"
                                                    id="infoModal{{ $kapalsayur->id }}Label">Info Detail Data kapalsayur
                                                    Site SK</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>Nama Desa:</strong> {{ $kapalsayur->nama_desa }}</p>
                                                <p><strong>Komuditas:</strong> {{ $kapalsayur->komuditas }}</p>
                                                <p><strong>Luas Lahan:</strong> {{ $kapalsayur->luas_lahan }}</p>
                                                <p><strong>Produksi Sebelum:</strong> {{ $kapalsayur->hasil_sebelum }}</p>
                                                <p><strong>Jumlah Penerima Laki-laki:</strong> {{ $kapalsayur->jumlah_penerima_laki_laki }}</p>
                                                <p><strong>Jumlah Penerima Perempuan:</strong> {{ $kapalsayur->jumlah_penerima_perempuan }}</p>
                                                <p><strong>Produksi Target:</strong> {{ $kapalsayur->hasil_target }}</p>
                                                <p><strong>Produksi Hasil:</strong> {{ $kapalsayur->hasil_akhir }}</p>
                                                <p><strong>Keterangan:</strong> {{ $kapalsayur->keterangan }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
</x-module.comdevview>
