<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="row">
            <div class="col">
                <div class="">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="padding-left: 15px;">
                                <h4 class="card-title m-0"><b>Data Dokumentasi Comdev</b></h4>
                            </div>
                            <div>
                                <a href="{{ url('comdev/dokumentasi/create') }}" class="btn btn-success">
                                    <i class="fas fa-plus-circle"></i> Tambah Data
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th style="padding: 6px">No</th>
                                        <th style="padding: 6px">Aksi</th>
                                        <th style="padding: 6px">Judul Dokumentasi</th>
                                        <th style="padding: 6px">Tanggal Kegiatan</th>
                                        <th style="padding: 6px">Link Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_dokumentasi as $dokumentasi)
                                        <tr>
                                            <td style="padding: 2px">{{ $loop->iteration }}</td>
                                            <td style="padding: 2px"class="text-left">
                                                <div class="btn-group">
                                                    {{-- <x-template.button.info-button url="comdev/dokumentasi" id="{{ $dokumentasi->id }}" /> --}}
                                                    <x-template.button.edit-button url="comdev/dokumentasi"
                                                        id="{{ $dokumentasi->id }}" />
                                                    <x-template.button.delete-button id="{{ $dokumentasi->id }}"
                                                        path="" />
                                                </div>
                                            </td>
                                            <td class="text-left" style="padding: 2px">{{ $dokumentasi->judul_dokumentasi }}</td>
                                            <td class="text-left" style="padding: 2px">{{ $dokumentasi->formatted_tanggal_kegiatan }}</td>
                                            <td style="padding: 2px">
                                                <a href="{{ $dokumentasi->link_foto }}" target="_blank"
                                                    class="text-primary">
                                                    <i class="fa fa-link"></i> Lihat Dokumentasi
                                                </a>
                                            </td>
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

{{--
    <x-data.index title="data peserta" url="dokumentasi/create">
        <x-tables.table>
            <x-tables.tr>

                <x-tables.th label='No' />

                <x-tables.th label='Action' />

                <x-tables.th label='judul' />
                <x-tables.th label='tanggal' />
                <x-tables.th label='Link Foto' />

            </x-tables.tr>
            <tbody>
                @foreach ($list_dokumentasi as $dokumentasi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <div class="btn-group">
                                {{-- <x-template.button.info-button url="comdev/dokumentasi" id="{{ $dokumentasi->id }}" /> --}}
                                {{-- <x-template.button.edit-button url="comdev/dokumentasi"
                                    id="{{ $dokumentasi->id }}" />
                                <x-template.button.delete-button id="{{ $dokumentasi->id }}"
                                    path="" />
                            </div>
                        </td> --}}
                        {{-- <td>{{ $dokumentasi->judul_dokumentasi }}</td>
                        <td>{{ $dokumentasi->tanggal_kegiatan }}</td>
                        <td>
                            <a href="{{ $dokumentasi->link_foto }}" target="_blank"
                                class="text-primary">
                                <i class="fa fa-link"></i> Lihat Dokumentasi
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody> --}}

{{--
        </x-tables.table>
    </x-data.index> --}} --}}

