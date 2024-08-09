<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="row">
            <div class="col">
                <div class="">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="padding-left: 20px;">
                                <h4 class="card-title m-0"><b>Data Perikanan Site TNB</b></h4>
                            </div>
                            <div>
                                <a href="{{ url('comdev/site_tnb/perikanan/create') }}" class="btn btn-success">
                                    <i class="fas fa-plus-circle"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped container-fluid"
                                style="width: 100%;">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th style="padding: 6px" rowspan="2">No</th>
                                        <th style="padding: 6px" width="50" rowspan="2">Aksi</th>
                                        <th style="padding: 6px" rowspan="2">Nama Desa</th>
                                        {{-- <th style="padding: 6px" rowspan="2">Komoditas</th> --}}
                                        <th style="padding: 6px" colspan="4" style="text-align: center">Produksi</th>
                                        <th style="padding: 6px" colspan="4" style="text-align: center">Jumlah
                                            Penerima Manfaat</th>
                                    </tr>
                                    <tr style="text-align: center">
                                        <th style="padding: 6px">Sebelum</th>
                                        <th style="padding: 6px">Target</th>
                                        <th style="padding: 6px">Hasil</th>
                                        <th style="padding: 6px">Keterangan</th>
                                        <th style="padding: 6px" style="width: 60px; text-align: center">L</th>
                                        <th style="padding: 6px" style="width: 60px; text-align: center">P</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_perikanan as $perikanan)
                                        <tr>
                                            <td class="text-center" style="padding: 2px">{{ $loop->iteration }}</td>
                                            <td style="padding: 2px">
                                                <div class="btn-group">
                                                    <x-template.button.info-button url="comdev/site_tnb/perikanan"
                                                        id="{{ $perikanan->id }}" />
                                                    <x-template.button.edit-button url="comdev/site_tnb/perikanan"
                                                        id="{{ $perikanan->id }}" />
                                                    <x-template.button.delete-button id="{{ $perikanan->id }}"
                                                        path="" />
                                                </div>
                                            </td>
                                            <td class="text-left">{{ $perikanan->nama_desa }}</td>
                                            {{-- <td>{{ $perikanan->komuditas}}</td> --}}
                                            <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                                {{ $perikanan->hasil_sebelum }}</td>
                                            <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                                {{ $perikanan->hasil_target }}</td>
                                            <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                                {{ $perikanan->hasil_akhir }}</td>
                                            <td class="text-left">{{ $perikanan->keterangan }}</td>
                                            <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                                {{ $perikanan->jumlah_penerima_laki_laki }}</td>
                                            <td class="text-right" style="padding: 2px 20px 1px 1px;">
                                                {{ $perikanan->jumlah_penerima_perempuan }}</td>
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
