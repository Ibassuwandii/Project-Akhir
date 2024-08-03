<x-module.edukasiview>
    @if ($listVisitschool->isEmpty())
        <p class="text-center">Tidak ada data kunjungan sekolah.</p>
    @else
        <div class="card">
            <div class="card-header bg-primary text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title m-0"><b>Data Visit School</b></h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr class="bg-secondary text-white">
                                <th style="padding: 6px" rowspan="2" class="text-center">No</th>
                                <th style="padding: 6px" rowspan="2" class="text-center">Nama Sekolah</th>
                                <th style="padding: 6px" rowspan="2" class="text-center">Lokasi Kegiatan</th>
                                <th style="padding: 6px" colspan="2" class="text-center">Jumlah Peserta</th>
                                <th style="padding: 6px" rowspan="2" class="text-center">Tanggal Kunjungan</th>
                            </tr>
                            <tr class="bg-secondary text-white">
                                <th style="padding: 6px" class="text-center">L</th>
                                <th style="padding: 6px" class="text-center">P</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listVisitschool as $visitschool)
                            <tr>
                                <td class="text-center" style="padding: 2px">{{ $loop->iteration }}</td>
                                <td class="text-left" style="padding: 2px">{{ $visitschool->nama_sekolah }}</td>
                                <td class="text-left" style="padding: 2px">{{ $visitschool->lokasi }}</td>
                                <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $visitschool->laki_laki }}</td>
                                <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $visitschool->perempuan }}</td>
                                <td class="text-left" style="padding: 2px">{{ \Carbon\Carbon::parse($visitschool->tanggal)->translatedFormat('d F Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
</x-module.edukasiview>
