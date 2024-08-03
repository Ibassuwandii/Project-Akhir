<x-module.edukasiview>
    @if ($listTamanbaca->isEmpty())
        <p class="text-center">Tidak ada data kunjungan sekolah.</p>
    @else
        <div class="card">
            <div class="card-header bg-primary text-white">
                <div class="card-title">
                    Data Taman Baca
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr class="bg-secondary text-white">
                                <th style="padding: 6px; width: 50px;" rowspan="2" class="text-center align-middle">No</th>
                                <th style="padding: 6px" colspan="4" class="text-center">Kategori Buku</th>
                            </tr>
                            <tr class="bg-secondary text-white">
                                <th style="padding: 6px; width: 150px;" class="text-center">Jenis</th>
                                <th style="padding: 6px; width: 90px;" class="text-center">Total</th>
                                <th style="padding: 6px; width: 90px;" class="text-center">Dipinjam</th>
                                <th style="padding: 6px; width: 150px;" class="text-center">Bulan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listTamanbaca as $tamanbaca)
                            <tr>
                                <td class="text-center" style="padding: 2px">{{ $loop->iteration }}</td>
                                <td class="text-left" style="padding: 2px">{{ $tamanbaca->jenis_buku }}</td>
                                <td class="text-right" style="padding: 1px 20px 1px 1px;">{{ $tamanbaca->total_buku }}</td>
                                <td class="text-right" style="padding: 1px 20px 1px 1px;">{{ $tamanbaca->total_pinjam }}</td>
                                <td class="text-left" style="padding: 2px">{{ $tamanbaca->bulan_pinjam }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
</x-module.edukasiview>
