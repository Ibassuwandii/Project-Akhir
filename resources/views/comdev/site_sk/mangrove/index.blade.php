<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="row">
            <div class="col">
                <div class="">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="padding-left: 20px;">
                                <h4 class="card-title m-0"><b>Data Konservasi Manggrove</b></h4>
                            </div>
                            <div>
                                <a href="{{ url('comdev/site_sk/mangrove/create') }}" class="btn btn-info">
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
                                        <th style="padding: 6px" width="50" rowspan="2">No</th>
                                        <th style="padding: 6px" width="50" rowspan="2">Aksi</th>
                                        {{-- <th style="padding: 2px 20px 1px 1px;" rowspan="2">Semester</th> --}}
                                        <th style="padding: 2px 20px 1px 1px;" colspan="3" style="text-align: center">Data Bibit</th>
                                        <th style="padding: 2px 20px 1px 1px;" rowspan="2">Tanggal Penanaman</th>
                                        <th style="padding: 2px 20px 1px 1px;" rowspan="2">Lokasi</th>
                                    </tr>
                                    <tr style="text-align: center">
                                        <th style="padding: 2px 20px 1px 1px;">Disemai</th>
                                        <th style="padding: 2px 20px 1px 1px;">Mati</th>
                                        <th style="padding: 2px 20px 1px 1px;">Hidup</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_mangrove as $mangrove)
                                    <tr>
                                        <td class="text-center" style="padding: 2px" >{{ $loop->iteration}}</td>
                                        <td style="padding: 2px" >
                                            <div class="btn-group">
                                                {{-- <x-template.button.info-button url="comdev/site_sk/mangrove"
                                                    id="{{ $mangrove->id }}" /> --}}
                                                <x-template.button.edit-button url="comdev/site_sk/mangrove"
                                                    id="{{ $mangrove->id }}" />
                                                <x-template.button.delete-button  id="{{$mangrove->id}}" path="" />
                                            </div>
                                        </td>
                                        {{-- <td style="padding: 2px" class="text-left">{{ $mangrove->semester }}</td> --}}
                                        <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $mangrove->bibit_disemai }}</td>
                                        <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $mangrove->bibit_mati }}</td>
                                        <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $mangrove->bibit_hidup }}</td>
                                        <td style="padding: 2px" class="text-left">{{ $mangrove->formatted_tanggal }}</td>
                                        <td style="padding: 2px" class="text-left">{{ $mangrove->lokasi }}</td>
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




{{-- <x-module.comdev>
    <x-utils.notif />
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <div class="card-title" style="font-weight: bold;">
                            Data Konservasi Mangrove
                        </div>
                        <a href="{{ url('comdev/site_sk/mangrove/create') }}" class="btn btn-success float-right">
                            <i class="fas fa-plus-circle"></i> Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Aksi</th>
                                        <th rowspan="2">Semester</th>
                                        <th colspan="3" style="text-align: center">Data Bibit</th>
                                        <th rowspan="2">Tanggal Penanaman</th>
                                        <th rowspan="2">Keterangan</th>
                                    </tr>
                                    <tr style="text-align: center">
                                        <th>Disemai</th>
                                        <th>Mati</th>
                                        <th>Hidup</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_mangrove as $mangrove)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <x-template.button.info-button url="comdev/site_sk/mangrove" id="{{ $mangrove->id }}" />
                                                <x-template.button.edit-button url="comdev/site_sk/mangrove" id="{{ $mangrove->id }}" />
                                                <x-template.button.delete-button  id="{{$mangrove->id}}" path="" />
                                            </div>
                                        </td>
                                        <td>{{ $mangrove->semester }}</td>
                                        <td>{{ $mangrove->bibit_hidup }}</td>
                                        <td>{{ $mangrove->bibit_mati }}</td>
                                        <td>{{ $mangrove->bibit_hidup }}</td>
                                        <td>{{ $mangrove->tanggal }}</td>
                                        <td>{{ $mangrove->keterangan }}</td>
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
</x-module.comdev> --}}
