<x-module.comdev>

    <x-utils.notif />
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-cyan text-white">
                        <div class="card-title">
                            Data Tpom Lokasi PGSB
                        </div>
                        <a href="{{url('comdev/site_pgsb/tpom/create')}}" class="btn btn-success float-right">
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
                                        <th rowspan="2">Jangkauan Patroli </th>
                                        {{-- <th rowspan="2">Komoditas</th> --}}
                                        <th colspan="3" style="text-align: center">Insiden Kebakaran</th>
                                        {{-- <th rowspan="2">Sosialisasi</th> --}}
                                    </tr>
                                    <tr style="text-align: center">
                                        <th>Titik Koordinat</th>
                                        <th>Luas Lahan</th>
                                        <th>Pemilik Lahan</th>
                                        {{-- <th>Keterangan</th> --}}
                                        {{-- <th style="width: 60px; text-align: center">L</th>
                                        <th style="width: 60px; text-align: center">P</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_tpom as $tpom)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <x-template.button.info-button url="comdev/site_pgsb/tpom"
                                                    id="{{ $tpom->id }}" />
                                                <x-template.button.edit-button url="comdev/site_pgsb/tpom"
                                                    id="{{ $tpom->id }}" />
                                                <x-template.button.delete-button  id="{{$tpom->id}}" path="" />
                                            </div>
                                        </td>
                                        <td>{{ $tpom->jangkauan_patroli}}</td>
                                        {{-- <td>{{ $tpom->komuditas}}</td> --}}
                                        <td>{{ $tpom->titik_koordinat}}</td>
                                        <td>{{ $tpom->luas_lahan}}</td>
                                        <td>{{ $tpom->pemilik_lahan}}</td>
                                        {{-- <td>{{ $tpom->sosialisasi}}</td> --}}
                                        {{-- <td>{{ $tpom->jumlah_penerima_laki_laki}}</td>
                                        <td>{{ $tpom->jumlah_penerima_perempuan}}</td> --}}
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
