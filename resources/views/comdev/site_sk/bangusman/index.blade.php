<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="padding-left: 20px;">
                                <h4 class="card-title m-0"><b>Data Ayo Bang Usman Site Sk</b></h4>
                            </div>
                            <div>
                                <a href="{{ url('comdev/site_sk/bangusman/create') }}" class="btn btn-success">
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
                                        <th style="padding: 6px" width="50">No</th>
                                        <th style="padding: 6px" width="50">Aksi</th>
                                        <th style="padding: 6px">Nama KUB</th>
                                        <th style="padding: 6px">Nama Penerima Manfaat</th>
                                        <th style="padding: 6px">Jumlah Investasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_bangusman as $bangusman)
                                    <tr>
                                        <td style="padding: 2px">{{ $loop->iteration }}</td>
                                        <td style="padding: 2px">
                                            <div class="btn-group">
                                                <x-template.button.info-button url="comdev/site_sk/bangusman" id="{{ $bangusman->id }}" />
                                                <x-template.button.edit-button url="comdev/site_sk/bangusman" id="{{ $bangusman->id }}" />
                                                <x-template.button.delete-button  id="{{$bangusman->id}}" path="" />
                                            </div>
                                        </td>
                                        <td class="text-left">{{ $bangusman->nama_kub }}</td>
                                        <td class="text-left">{{ $bangusman->nama_penerima }}</td>
                                        <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $bangusman->jumlah_investasi }}</td>
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

    <!-- Tambahkan CSS-->
    {{-- <style>
        .card-header {
            background: linear-gradient(45deg, #00bcd4, #009688);
            color: white;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .btn-group .btn {
            margin-right: 5px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table th {
            background-color: #6c757d;
            color: white;
        }
        .btn-group .btn {
            margin-right: 5px;
        }
    </style> --}}
</x-module.comdev>
