<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="row">
            <div class="col">
                <div class="">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="padding-left: 20px;">
                                <h4 class="card-title m-0"><b>Data Kapal Sayur Site TNB</b></h4>
                            </div>
                            <div>
                                <a href="{{ url('comdev/site_tnb/kapalsayur/create') }}" class="btn btn-info">
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
                                        <th style="padding: 6px" width="50">No</th>
                                        <th style="padding: 6px" width="50">Aksi</th>
                                        <th style="padding: 6px">Nama</th>
                                        <th style="padding: 6px">ID Nama</th>
                                        <th style="padding: 6px">Jenis Kelamin</th>
                                        <th style="padding: 6px">Tanggal Trip</th>
                                        <th style="padding: 6px">Jumlah Trip</th>
                                        <th style="padding: 6px">Hasil Penjualan</th>
                                        <th style="padding: 6px">Iuran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_kapalsayur as $kapalsayur)
                                        <tr>
                                            <td class="text-center" style="padding: 2px">{{ $loop->iteration }}</td>
                                            <td class="text-center" style="padding: 2px">
                                                <div class="btn-group">
                                                    {{-- <x-template.button.info-button url="comdev/site_tnb/kapalsayur" id="{{ $kapalsayur->id }}" /> --}}
                                                    <x-template.button.edit-button url="comdev/site_tnb/kapalsayur"
                                                        id="{{ $kapalsayur->id }}" />
                                                    <x-template.button.delete-button id="{{ $kapalsayur->id }}"
                                                        path="" />
                                                </div>
                                            </td>
                                            <td style="padding: 6px" class="text-left">{{ $kapalsayur->nama }}</td>
                                            <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $kapalsayur->id_nama }}</td>
                                            <td style="padding: 6px" class="text-left">{{ $kapalsayur->jenis_kelamin }}</td>
                                            <td style="padding: 6px" class="text-left">{{ $kapalsayur->formatted_tanggal_trip }}</td>
                                            <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $kapalsayur->jumlah_trip }}</td>
                                            <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $kapalsayur->hasil_penjualan }}</td>
                                            <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $kapalsayur->iuran }}</td>
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
