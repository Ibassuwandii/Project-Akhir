<x-module.edukasi>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div style="padding-left: 5px;">
                    <h4 class="card-title m-0"><b>Data Taman Baca</b></h4>
                </div>
                <div>
                    <a href="{{ url('edukasi/tamanbaca/create') }}" class="btn btn-info">
                        <i class="fas fa-plus-circle"></i> Tambah Data
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="bg-secondary text-white">
                            <th style="padding: 6px" rowspan="2">No</th>
                            <th style="padding: 6px" rowspan="2">Aksi</th>
                            <th style="padding: 6px" colspan="4">Kategori Buku</th>
                        </tr>
                        <tr class="bg-secondary text-white">
                            <th style="padding: 6px">Jenis</th>
                            <th style="padding: 6px">Total</th>
                            <th style="padding: 6px">Dipinjam</th>
                            <th style="padding: 6px">Bulan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_tamanbaca as $tamanbaca)
                            <tr>
                                <td style="padding: 2px">{{ $loop->iteration }}</td>
                                <td style="padding: 2px">
                                    <div>
                                        <x-template.button.edit-button url="edukasi/tamanbaca"
                                            id="{{ $tamanbaca->id }}" />
                                        <x-template.button.delete-button id="{{ $tamanbaca->id }}" path="" />
                                    </div>
                                </td>
                                <td style="padding: 2px" >{{ $tamanbaca->jenis_buku }}
                                </td>
                                <td class="text-right" style="padding: 2px 20px 1px 1px;" >{{ $tamanbaca->total_buku }}
                                </td>
                                <td class="text-right" style="padding: 2px 20px 1px 1px;" >{{ $tamanbaca->total_pinjam }}
                                </td>
                                <td style="padding: 2px" >{{ $tamanbaca->bulan_pinjam }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.edukasi>
