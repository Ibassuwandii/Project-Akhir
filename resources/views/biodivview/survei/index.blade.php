<x-module.biodivview>
    @if ($listSurvei->isEmpty())
        <p class="text-center">Tidak ada data observasi.</p>
    @else
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <div style="padding-left: 20px;">
                    <h2 class="card-title m-0"><b>Observation Details</b></h2>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr class="bg-secondary text-white">
                                <th style="padding: 6px; width: 50px;">No</th>
                                <th style="padding: 6px" class="text-center">Bulan</th>
                                <th style="padding: 6px" class="text-center">Taxa</th>
                                <th style="padding: 6px" class="text-center">Species</th>
                                <th style="padding: 6px" class="text-center">English Name</th>
                                <th style="padding: 6px" class="text-center">IUCN Redist Status</th>
                                <th style="padding: 6px" class="text-center">Protected by Indonesia Law</th>
                                <th style="padding: 6px" class="text-center">Observations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listSurvei as $survei)
                                <tr>
                                    <td style="padding: 6px">{{ $loop->iteration }}</td>
                                    <td class="text-left" style="padding: 2px">{{ \Carbon\Carbon::parse($survei->bulan)->translatedFormat('d F Y') }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $survei->taxa }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $survei->species }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $survei->english_name }}</td>
                                    <td class="text-center" style="padding: 2px">{{ $survei->daftar_merah }}</td>
                                    <td class="text-center" style="padding: 2px">{{ $survei->law }}</td>
                                    <td class="text-right" style="padding: 1px 40px 1px 1px;">{{ $survei->observation }}
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
