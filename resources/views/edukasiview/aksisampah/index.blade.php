<x-module.edukasiview>
    @if ($listAksisampah->isEmpty())
        <p class="text-center">Tidak ada aksi sampah.</p>
    @else
        <div class="card">
            <div class="card-header bg-primary text-white">
                <div class="card-title">
                    Data Aksi Sampah
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th style="padding: 6px; width: 50px;" rowspan="2" class="text-center align-middle">No</th>
                                <th style="padding: 6px" rowspan="2" class="text-center align-middle">Lokasi Kegiatan</th>
                                <th style="padding: 6px" rowspan="2" class="text-center align-middle">Jumlah Peserta</th>
                                <th style="padding: 6px" rowspan="2" class="text-center align-middle">Tanggal Kegiatan</th>
                                <th style="padding: 6px" colspan="2" class="text-center">Sampah</th>
                            </tr>
                            <tr>
                                <th style="padding: 6px; width: 90px;" class="text-center">Total</th>
                                <th style="padding: 6px; width: 150px;" class="text-center">Jenis</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listAksisampah as $aksisampah)
                                <tr>
                                    <td style="padding: 6px">{{ $loop->iteration }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $aksisampah->lokasi }}</td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $aksisampah->jumlah_peserta }}</td>
                                    <td class="text-left" style="padding: 2px">{{ \Carbon\Carbon::parse($aksisampah->tanggal)->translatedFormat('d F Y') }}</td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $aksisampah->jumlah_sampah }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $aksisampah->jenis_sampah }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
</x-module.edukasiview>
