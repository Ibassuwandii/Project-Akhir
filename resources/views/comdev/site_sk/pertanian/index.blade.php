<x-module.comdev>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="padding-left: 20px;">
                                <h4 class="card-title m-0"><b>Data Pertanian Site SK</b></h4>
                            </div>
                            <div>
                                <a href="{{ url('comdev/site_sk/pertanian/create') }}" class="btn btn-success">
                                    <i class="fas fa-plus-circle"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped container-fluid" style="width: 100%;">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th style="padding: 6px" rowspan="2">No</th>
                                        <th style="padding: 6px" rowspan="2">Aksi</th>
                                        <th style="padding: 6px" rowspan="2">Nama Desa</th>
                                        {{-- <th style="padding: 6px" rowspan="2">Komoditas</th> --}}
                                        <th style="padding: 6px" colspan="4" style="text-align: center">Produksi</th>
                                        <th style="padding: 6px" colspan="2" style="text-align: center">Jumlah Penerima Manfaat</th>
                                        <th style="padding: 6px" rowspan="2">Tanggal Kegiatan</th>
                                    </tr>
                                    <tr style="text-align: center">
                                        <th style="padding: 6px" >Sebelum</th>
                                        <th style="padding: 6px" >Target</th>
                                        <th style="padding: 6px" >Hasil</th>
                                        <th style="padding: 6px" >Keterangan</th>
                                        <th style="padding: 6px">L</th>
                                        <th style="padding: 6px">P</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_pertanian as $pertanian)
                                    <tr>
                                        <td class="text-center" style="padding: 2px" >{{ $loop->iteration}}</td>
                                        <td class="text-center" style="padding: 2px" >
                                            <div class="btn-group">
                                                <x-template.button.info-button url="comdev/site_sk/pertanian"
                                                    id="{{ $pertanian->id }}" />
                                                <x-template.button.edit-button url="comdev/site_sk/pertanian"
                                                    id="{{ $pertanian->id }}" />
                                                <x-template.button.delete-button  id="{{$pertanian->id}}" path="" />
                                            </div>
                                        </td>
                                        <td class="text-left" >{{ $pertanian->nama_desa}}</td>
                                        {{-- <td>{{ $pertanian->komuditas}}</td> --}}
                                        <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $pertanian->hasil_sebelum }}</td>
                                        <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $pertanian->hasil_target }}</td>
                                        <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $pertanian->hasil_akhir }}</td>
                                        <td class="text-left" >{{ $pertanian->keterangan}}</td>
                                        <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $pertanian->jumlah_penerima_laki_laki}}</td>
                                        <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $pertanian->jumlah_penerima_perempuan}}</td>
                                        <td class="text-left" >{{ $pertanian->formatted_tanggal}}</td>
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
