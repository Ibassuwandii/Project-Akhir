<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-cyan text-white">
            <div class="card-title">
               Data Kapal Sayur Site TNB
            </div>
            <a href="{{url('comdev/site_tnb/kapalsayur/create')}}" class="btn btn-success float-right">
                <i class="fas fa-plus-circle"></i> Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Tanggal Trip</th>
                            <th>Jumlah Trip</th>
                            <th>Hasil Penjualan</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_kapalsayur as $kapalsayur)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="comdev/site_tnb" id="{{ $kapalsayur->id }}" />
                                    <x-template.button.edit-button url="comdev/site_tnb" id="{{ $kapalsayur->id }}" />
                                    <x-template.button.delete-button  id="{{$kapalsayur->id}}" path="" />
                                </div>
                            </td>
                            <td>{{ $kapalsayur->tanggal_trip }}</td>
                            <td>{{ $kapalsayur->jumlah_trip }}</td>
                            <td>{{ $kapalsayur->hasil_penjualan }}</td>
                            <td>{{ $kapalsayur->keterangan }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.comdev>
