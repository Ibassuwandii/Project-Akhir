<x-module.biodivview>
    @if ($listAntropogenik->isEmpty())
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
                                <th style="padding: 6px" class="text-center">Method</th>
                                <th style="padding: 6px" class="text-center">Observation category</th>
                                <th style="padding: 6px" class="text-center">Observation</th>
                                <th style="padding: 6px" class="text-center">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listAntropogenik as $antropogenik)
                                <tr>
                                    <td style="padding: 6px">{{ $loop->iteration }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $antropogenik->bulan }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $antropogenik->metode }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $antropogenik->observasi }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $antropogenik->pengamatan }}</td>
                                    <td class="text-right" style="padding: 1px 30px 1px 1px;">
                                        {{ $antropogenik->kuantitas }}
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
