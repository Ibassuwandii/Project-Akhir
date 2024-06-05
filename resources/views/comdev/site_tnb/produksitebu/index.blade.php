<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-cyan text-white">
            <div class="card-title">
               Data Produksi Gula Tebu Site TNB
            </div>
            <a href="{{url('divisi/comdev/site_tnb/produksitebu/create')}}" class="btn btn-success float-right">
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
                            <th>Nama Dusun</th>
                            <th>Tanggal Produksi</th>
                            <th>Produksi</th>
                            <th>Hasil Penjualan</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_produksitebu as $produksitebu)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="divisi/comdev/site_tnb" id="{{ $produksitebu->id }}" />
                                    <x-template.button.edit-button url="divisi/comdev/site_tnb" id="{{ $produksitebu->id }}" />
                                    <x-template.button.delete-button  id="{{$produksitebu->id}}" path="" />
                                </div>
                            </td>
                            <td>{{ $produksitebu->nama_dusun}}</td>
                            <td>{{ $produksitebu->tanggal_produksi }}</td>
                            <td>{{ $produksitebu->produksi }}</td>
                            <td>{{ $produksitebu->hasil_penjualan }}</td>
                            <td>{{ $produksitebu->keterangan }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.comdev>
