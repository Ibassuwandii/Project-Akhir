<x-module.biodiv>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div style="padding-left: 20px;">
                    <h4 class="card-title m-0"><b>Details Survey</b></h4>
                </div>
                <div>
                    <a href="{{ url('biodiv/orangutan/create') }}" class="btn btn-success">
                        <i class="fas fa-plus-circle"></i> Tambah Data
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <!-- Table -->
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="bg-secondary text-white">
                            <th style="padding: 6px; width: 50px;">No</th>
                            <th style="padding: 6px; width: 100px;">Aksi</th>
                            <th style="padding: 6px" class="text-center">Date</th>
                            <th style="padding: 6px" class="text-center">Location</th>
                            <th style="padding: 6px" class="text-center">Habitat Type</th>
                            <th style="padding: 6px" class="text-center">Number of Transects</th>
                            <th style="padding: 6px" class="text-center">Total Transect Length (m)</th>
                            <th style="padding: 6px" class="text-center">Number of Nest(m)</th>
                            <th style="padding: 6px" class="text-center">Estimated Density per km</th>
                        </tr>
                    </thead>
                    <tbody id="orangutanTableBody">
                        @foreach ($list_orangutan as $orangutan)
                            <tr>
                                <td class="text-center" style="padding: 2px">{{ $loop->iteration }}</td>
                                <td class="text-center" style="padding: 2px">
                                    <div class="btn-group">
                                        {{-- <x-template.button.info-button url="biodiv/orangutan" id="{{ $orangutan->id }}" /> --}}
                                        <x-template.button.edit-button url="biodiv/orangutan"
                                            id="{{ $orangutan->id }}" />
                                        <x-template.button.delete-button id="{{ $orangutan->id }}" path="" />
                                    </div>
                                </td>
                                <td class="text-left" style="padding: 2px">{{ $orangutan->tanggal }}</td>
                                <td class="text-left" style="padding: 2px">{{ $orangutan->lokasi }}</td>
                                <td class="text-left" style="padding: 2px">{{ $orangutan->tipe_habitat }}</td>
                                <td class="text-right" style="padding: 1px 20px 1px 1px;">
                                    {{ $orangutan->jumlah_transek }}</td>
                                <td class="text-right" style="padding: 1px 20px 1px 1px;">
                                    {{ $orangutan->total_panjang }}</td>
                                <td class="text-right" style="padding: 1px 20px 1px 1px;">
                                    {{ $orangutan->jumlah_sarang }}</td>
                                <td class="text-right" style="padding: 1px 20px 1px 1px;">{{ $orangutan->kepadatan }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.biodiv>
