<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <div class="card-title" style="font-weight: bold;">
                Data Taman Baca
            </div>
            <a href="{{ url('edukasi/tamanbaca/create') }}" class="btn btn-success float-right">
                <i class="fas fa-plus-circle"></i> Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="bg-secondary text-white">
                            <th rowspan="2" class="text-center align-middle">No</th>
                            <th rowspan="2" class="text-center align-middle">Aksi</th>
                            <th colspan="2" class="text-center">Buku</th>
                            <th colspan="2" class="text-center">Jumlah Pengunjung</th>
                            <th colspan="2" class="text-center">Buku Dipinjam</th>
                        </tr>
                        <tr class="bg-secondary text-white">
                            <th class="text-center">Jenis</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Bulan</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Bulan</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_tamanbaca as $tamanbaca)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-template.button.info-button url="edukasi/tamanbaca" id="{{ $tamanbaca->id }}" />
                                    <x-template.button.edit-button url="edukasi/tamanbaca" id="{{ $tamanbaca->id }}" />
                                    <x-template.button.delete-button id="{{ $tamanbaca->id }}" path="" />
                                </div>
                            </td>
                            <td class="text-left">{{ $tamanbaca->jenis_buku }}</td>
                            <td class="text-left">{{ $tamanbaca->total_buku }}</td>
                            <td class="text-left">{{ $tamanbaca->formatted_bulan_pengunjung }}</td>
                            <td class="text-left">{{ $tamanbaca->total_pengunjung }}</td>
                            <td class="text-left">{{ $tamanbaca->formatted_bulan_pinjam }}</td>
                            <td class="text-left">{{ $tamanbaca->total_pinjam }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.edukasi>
