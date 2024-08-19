<x-module.biodiv>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div style="padding-left: 20px;">
                    <h4 class="card-title m-0"><b>Observation Details</b></h4>
                </div>
                <div>
                    <a href="{{ url('biodiv/survei/create') }}" class="btn btn-info">
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
                            <th style="padding: 6px; width: 50px;">No</th>
                            <th style="padding: 6px; width: 100px;">Aksi</th>
                            <th style="padding: 6px" class="text-center">Bulan</th>
                            <th style="padding: 6px" class="text-center">Taxa</th>
                            <th style="padding: 6px" class="text-center">Species</th>
                            <th style="padding: 6px" class="text-center">English Name</th>
                            <th style="padding: 6px" class="text-center">IUCN Redist Status</th>
                            <th style="padding: 6px" class="text-center">Protected by Indonesia Law</th>
                            <th style="padding: 6px" class="text-center">Observations</th>
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
                                <td class="text-left" style="padding: 2px">{{ $survei->formatted_bulan }}</td>
                                <td class="text-left" style="padding: 2px">{{ $survei->taxa }}</td>
                                <td class="text-left" style="padding: 2px">{{ $survei->species }}</td>
                                <td class="text-left" style="padding: 2px">{{ $survei->english_name }}</td>
                                <td class="text-center" style="padding: 2px">{{ $survei->daftar_merah }}</td>
                                <td class="text-center" style="padding: 2px">{{ $survei->law }}</td>
                                <td class="text-right" style="padding: 1px 40px 1px 1px;">{{ $survei->observation }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.biodiv>
