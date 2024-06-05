<x-module.comdev>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <div class="card-title">
                            Data Ayo Bang Usman
                        </div>
                        <a href="{{ url('comdev/site_sk/bangusman/create') }}" class="btn btn-success float-right">
                            <i class="fas fa-plus-circle"></i> Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th style="text-align: center">Nama KUB</th>
                                        <th style="text-align: center">Nama Penerima Manfaat</th>
                                        <th style="text-align: center">Jumlah Investasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_bangusman as $bangusman)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <x-template.button.info-button url="comdev/site_sk/bangusman" id="{{ $bangusman->id }}" />
                                                <x-template.button.edit-button url="comdev/site_sk/bangusman" id="{{ $bangusman->id }}" />
                                                <x-template.button.delete-button  id="{{$bangusman->id}}" path="" />
                                            </div>
                                        </td>
                                        <td style="text-align: center">{{ $bangusman->nama_kub }}</td>
                                        <td style="text-align: center">{{ $bangusman->nama_penerima }}</td>
                                        <td style="text-align: center">{{ $bangusman->jumlah_investasi }}</td>
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
