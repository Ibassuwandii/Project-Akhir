<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div style="padding-left: 20px;">
                    <h4 class="card-title m-0"><b>Data Produksi Gula Tebu Site TNB</b></h4>
                </div>
                <div>
                    <a href="{{ url('comdev/site_tnb/produksitebu/create') }}" class="btn btn-info">
                        <i class="fas fa-plus-circle"></i> Tambah Data
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th style="padding: 6px" width="50">No</th>
                            <th style="padding: 6px" width="10">Aksi</th>
                            <th style="padding: 6px">Nama Dusun</th>
                            <th style="padding: 6px">Tanggal Produksi</th>
                            <th style="padding: 6px">Produksi (Butir)</th>
                            <th style="padding: 6px">Hasil Penjualan</th>
                            {{-- <th style="padding: 6px">Keterangan</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_produksitebu as $produksitebu)
                        <tr>
                            <td style="padding: 2px">{{ $loop->iteration }}</td>
                            <td style="padding: 2px">
                                <div class="btn-group">
                                    {{-- <x-template.button.info-button url="comdev/site_tnb/produksitebu" id="{{ $produksitebu->id }}" /> --}}
                                    <x-template.button.edit-button url="comdev/site_tnb/produksitebu" id="{{ $produksitebu->id }}" />
                                    <x-template.button.delete-button  id="{{$produksitebu->id}}" path="" />
                                </div>
                            </td>
                            <td class="text-left" style="padding: 2px">{{ $produksitebu->nama_dusun}}</td>
                            <td class="text-left" style="padding: 2px">{{ $produksitebu->formatted_tanggal_produksi }}</td>
                            <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $produksitebu->produksi }}</td>
                            <td class="text-right" style="padding: 2px 30px 1px 1px;">{{ $produksitebu->hasil_penjualan }}</td>
                            {{-- <td class="text-left" style="padding: 2px">{{ $produksitebu->keterangan }}</td> --}}

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.comdev>
