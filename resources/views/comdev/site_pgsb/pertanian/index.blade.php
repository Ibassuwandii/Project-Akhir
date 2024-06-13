<x-module.comdev>
    <x-utils.notif />
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg">
                    <div class="card-header bg-cyan text-white">
                        <div class="card-title" style="font-weight: bold;">
                            Data Pertanian Lokasi PGSB
                        </div>
                        <a href="{{url('comdev/site_pgsb/pertanian/create')}}" class="btn btn-success float-right">
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
                                        <td class="text-left">
                                            <div class="btn-group">
                                                <x-template.button.info-button url="comdev/site_pgsb/pertanian"
                                                    id="{{ $pertanian->id }}" />
                                                <x-template.button.edit-button url="comdev/site_pgsb/pertanian"
                                                    id="{{ $pertanian->id }}" />
                                                <x-template.button.delete-button  id="{{$pertanian->id}}" path="" />
                                            </div>
                                        </td>
                                        <td class="text-left">{{ $pertanian->nama_desa}}</td>
                                        {{-- <td class="text-left">{{ $pertanian->komuditas}}</td> --}}
                                        <td class="text-left">{{ $pertanian->hasil_sebelum}}</td>
                                        <td class="text-left">{{ $pertanian->hasil_target}}</td>
                                        <td class="text-left">{{ $pertanian->hasil_akhir}}</td>
                                        <td class="text-left">{{ $pertanian->keterangan}}</td>
                                        <td class="text-left">{{ $pertanian->jumlah_penerima_laki_laki}}</td>
                                        <td class="text-left">{{ $pertanian->jumlah_penerima_perempuan}}</td>
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
