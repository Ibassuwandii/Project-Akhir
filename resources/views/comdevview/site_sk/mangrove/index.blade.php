<x-module.comdevview>
    @if ($listMangrove->isEmpty())
        <p class="text-center">Tidak ada Data Perikanan.</p>
    @else
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <div class="card-title">
                            Data Konservasi Mangrove
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th rowspan="2" class="text-center" style="width: 50px;">No</th>
                                        <th rowspan="2">Semester</th>
                                        <th colspan="3" style="text-align: center">Data Bibit</th>
                                        <th rowspan="2" class="text-center" style="width: 100px;">Tanggal Penanaman</th>
                                        <th rowspan="2">Keterangan</th>
                                        <th rowspan="2">Dokumentasi</th>
                                    </tr>
                                    <tr style="text-align: center">
                                        <th>Disemai</th>
                                        <th>Mati</th>
                                        <th>Hidup</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listMangrove as $mangrove)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $mangrove->semester }}</td>
                                        <td>{{ $mangrove->bibit_disemai }}</td> <!-- Update the variable names if necessary -->
                                        <td>{{ $mangrove->bibit_mati }}</td>
                                        <td>{{ $mangrove->bibit_hidup }}</td>
                                        <td>{{ $mangrove->tanggal }}</td>
                                        <td>{{ $mangrove->keterangan }}</td>
                                        <td>
                                            @if ($mangrove->file_foto)
                                                <a href="{{ url('public') }}/{{ $mangrove->file_foto }}" target="_blank" class="text-primary">
                                                    <i class="fas fa-image"></i> Lihat Gambar
                                                </a>
                                            @else
                                                <span class="text-muted">Tidak ada file</span>
                                            @endif
                                        </td>
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
