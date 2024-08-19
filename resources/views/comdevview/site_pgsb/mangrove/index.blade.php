<x-module.comdevview>
    @if ($listMangrove->isEmpty())
        <p class="text-center">Tidak ada Data Perikanan.</p>
    @else
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-lg">
                        <div class="card-header bg-primary text-white">
                            <div style="padding-left: 20px;">
                                <p class="card-title m-0"><b>Data Konservasi Manggrove Site PGSB</b></p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped table-hover">
                                    <thead class="bg-secondary text-white">
                                        <tr>
                                            <th style="padding: 6px" width="50" rowspan="2">No</th>
                                            {{-- <th style="padding: 2px 20px 1px 1px;" rowspan="2">Semester</th> --}}
                                            <th style="padding: 2px 20px 1px 1px;" colspan="3"
                                                style="text-align: center">Data Bibit</th>
                                            <th style="padding: 2px 20px 1px 1px;" rowspan="2">Tanggal Penanaman</th>
                                            <th style="padding: 2px 20px 1px 1px;" rowspan="2">Lokasi</th>
                                        </tr>
                                        <tr style="text-align: center">
                                            <th style="padding: 2px 20px 1px 1px;">Disemai</th>
                                            <th style="padding: 2px 20px 1px 1px;">Mati</th>
                                            <th style="padding: 2px 20px 1px 1px;">Hidup</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listMangrove as $mangrove)
                                            <tr>
                                                <td style="padding: 6px">{{ $loop->iteration }}</td>
                                                {{-- <td style="padding: 2px" class="text-left">{{ $mangrove->semester }}</td> --}}
                                                <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                                    {{ $mangrove->bibit_disemai }}</td>
                                                <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                                    {{ $mangrove->bibit_mati }}</td>
                                                <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                                    {{ $mangrove->bibit_hidup }}</td>
                                                <td class="text-left" style="padding: 6px;">
                                                    {{ \Carbon\Carbon::parse($mangrove->tanggal)->translatedFormat('d F Y') }}
                                                </td>
                                                <td style="padding: 2px" class="text-left">{{ $mangrove->lokasi }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-module.comdevview>
