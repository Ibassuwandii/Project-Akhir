<x-module.comdev>
    <x-utils.notif />
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg">
                    <div class="card-header bg-cyan text-white">
                        <div class="card-title">
                            Data Pertanian Lokasi SK
                        </div>
                        <a href="{{url('comdev/site_sk/pertanian/create')}}" class="btn btn-success float-right">
                            <i class="fas fa-plus-circle"></i> Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped container-fluid" style="width: 100%;">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Aksi</th>
                                        <th rowspan="2" width="500px">Nama Desa</th>
                                        {{-- <th rowspan="2">Komoditas</th> --}}
                                        <th colspan="4" style="text-align: center">Produksi</th>
                                        <th colspan="4" style="text-align: center">Jumlah Penerima Manfaat</th>
                                    </tr>
                                    <tr style="text-align: center">
                                        <th>Sebelum</th>
                                        <th>Target</th>
                                        <th>Hasil</th>
                                        <th>Keterangan</th>
                                        <th style="width: 60px; text-align: center">L</th>
                                        <th style="width: 60px; text-align: center">P</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_pertanian as $pertanian)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <x-template.button.info-button url="comdev/site_sk/pertanian"
                                                    id="{{ $pertanian->id }}" />
                                                <x-template.button.edit-button url="comdev/site_sk/pertanian"
                                                    id="{{ $pertanian->id }}" />
                                                <x-template.button.delete-button  id="{{$pertanian->id}}" path="" />
                                            </div>
                                        </td>
                                        <td>{{ $pertanian->nama_desa}}</td>
                                        {{-- <td>{{ $pertanian->komuditas}}</td> --}}
                                        <td>{{ $pertanian->hasil_sebelum}}</td>
                                        <td>{{ $pertanian->hasil_target}}</td>
                                        <td>{{ $pertanian->hasil_akhir}}</td>
                                        <td>{{ $pertanian->keterangan}}</td>
                                        <td>{{ $pertanian->jumlah_penerima_laki_laki}}</td>
                                        <td>{{ $pertanian->jumlah_penerima_perempuan}}</td>
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
</x-module.comdev>
