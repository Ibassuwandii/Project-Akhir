<x-module.biodivview>
    @if ($listOrangutan->isEmpty())
        <p class="text-center">Tidak ada data observasi.</p>
    @else
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <div style="padding-left: 20px;">
                    <h2 class="card-title m-0"><b>Antropogenic Activity</b></h2>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th style="padding: 6px; width: 50px;">No</th>
                                <th style="padding: 6px" class="text-center">Date (Tahun Bulan)</th>
                                <th style="padding: 6px" class="text-center">Location</th>
                                <th style="padding: 6px" class="text-center">Habitat Type</th>
                                <th style="padding: 6px" class="text-center">Total Transect Length (m)</th>
                                <th style="padding: 6px" class="text-center">Number of Nest(m)</th>
                                <th style="padding: 6px" class="text-center">Estimated Density per km</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listOrangutan as $orangutan)
                                <tr>
                                    <td style="padding: 6px">{{ $loop->iteration }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $orangutan->tanggal }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $orangutan->lokasi }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $orangutan->tipe_habitat }}</td>
                                    <td class="text-right" style="padding: 1px 30px 1px 1px;">{{ $orangutan->jumlah_transek }}</td>
                                    <td class="text-right" style="padding: 1px 30px 1px 1px;">
                                        {{ $orangutan->total_panjang }}
                                    <td class="text-right" style="padding: 1px 30px 1px 1px;">
                                        {{ $orangutan->jumlah_sarang }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
</x-module.biodivview>
