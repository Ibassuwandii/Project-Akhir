<x-module.biodiv>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div style="padding-left: 20px;">
                    <h4 class="card-title m-0"><b>Observation Details</b></h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <!-- Button to Add Data -->
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ url('biodiv/survei/create') }}" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> Tambah Data
                </a>
            </div>
            <!-- Table -->
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="bg-secondary text-white">
                            <th style="padding: 6px; width: 50px;">No</th>
                            <th style="padding: 6px; width: 100px;">Aksi</th>
                            <th style="padding: 6px" class="text-center">Date (Tahun Bulan)</th>
                            <th style="padding: 6px" class="text-center">Method</th>
                            <th style="padding: 6px" class="text-center">Observation category</th>
                            <th style="padding: 6px" class="text-center">Observation</th>
                            <th style="padding: 6px" class="text-center">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_survei as $survei)
                        <tr style="padding: 2px">
                            <td class="text-center" style="padding: 2px">{{ $loop->iteration }}</td>
                            <td class="text-center" style="padding: 2px">
                                <div class="btn-group">
                                    {{-- <x-template.button.info-button url="biodiv/survei" id="{{ $survei->id }}" /> --}}
                                    <x-template.button.edit-button url="biodiv/survei" id="{{ $survei->id }}" />
                                    <x-template.button.delete-button id="{{ $survei->id }}" path="" />
                                </div>
                            </td>
                            <td class="text-left" style="padding: 2px">{{ $survei->bulan }}</td>
                            <td class="text-left" style="padding: 2px">{{ $survei->metode }}</td>
                            <td class="text-left" style="padding: 2px">{{ $survei->observasi }}</td>
                            <td class="text-left" style="padding: 2px">{{ $survei->pengamatan }}</td>
                            <td class="text-right" style="padding: 1px 20px 1px 1px;">{{ $survei->kuantitas }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.biodiv>
