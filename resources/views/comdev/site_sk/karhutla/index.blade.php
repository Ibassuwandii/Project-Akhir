<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="padding-left: 20px;">
                                <h4 class="card-title m-0"><b>Data Patroli Karhutla Site SK</b></h4>
                            </div>
                            <div>
                                <a href="{{ url('comdev/site_sk/karhutla/create') }}" class="btn btn-success">
                                    <i class="fas fa-plus-circle"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th style="padding: 6px" width="50" rowspan="2">No</th>
                                        <th style="padding: 6px" width="50" rowspan="2">Aksi</th>
                                        <th style="padding: 6px" rowspan="2">Jangkauan Patroli</th>
                                        <th style="padding: 6px" colspan="3" style="text-align: center">Insiden
                                            Kebakaran</th>
                                        {{-- <th rowspan="2" style="text-align: center">Sosialisasi</th> --}}
                                    </tr>
                                    <tr style="text-align: center">
                                        <th  style="padding: 6px">Titik Koordinat</th>
                                        <th  style="padding: 6px">Luas Lahan</th>
                                        <th  style="padding: 6px">Pemilik Lahan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_karhutla as $karhutla)
                                        <tr>
                                            <td style="padding: 2px" >{{ $loop->iteration }}</td>
                                            <td style="padding: 2px">
                                                <div class="btn-group">
                                                    <x-template.button.info-button url="comdev/site_sk/karhutla"
                                                        id="{{ $karhutla->id }}" />
                                                    <x-template.button.edit-button url="comdev/site_sk/karhutla"
                                                        id="{{ $karhutla->id }}" />
                                                    <x-template.button.delete-button id="{{ $karhutla->id }}"
                                                        path="" />
                                                </div>
                                            </td>
                                            <td class="text-left" style="padding: 6px">{{ $karhutla->jangkauan_patroli }}</td>
                                            <td class="text-left" style="padding: 6px">{{ $karhutla->titik_koordinat }}</td>
                                            <td class="text-left" style="padding: 6px">{{ $karhutla->luas_lahan }}</td>
                                            <td class="text-left" style="padding: 6px">{{ $karhutla->pemilik_lahan }}</td>
                                            {{-- <td style="padding: 6px">{{ $karhutla->sosialisasi }}</td> --}}
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
