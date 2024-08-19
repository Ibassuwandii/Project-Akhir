<x-module.comdev>
    <x-utils.notif />
    <div class="card">
        <div class="row">
            <div class="col">
                <div class="">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="padding-left: 15px;">
                                <h4 class="card-title m-0"><b>Data Peta Comdev</b></h4>
                            </div>
                            <div>
                                <a href="{{ url('comdev/peta/create') }}" class="btn btn-info">
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
                                        <th style="padding: 6px">Judul Peta</th>
                                        <th style="padding: 6px">Tanggal Upload</th>
                                        <th style="padding: 6px">Gambar Peta</th
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_peta as $peta)
                                    <tr>
                                        <td style="padding: 2px">{{ $loop->iteration }}</td>
                                        <td style="padding: 2px">
                                            <div class="btn-group">
                                                {{-- <x-template.button.info-button url="comdev/peta" id="{{ $peta->id }}" /> --}}
                                                <x-template.button.edit-button url="comdev/peta" id="{{ $peta->id }}" />
                                                <x-template.button.delete-button  id="{{$peta->id}}" path="" />
                                            </div>
                                        </td>
                                        <td class="text-left" style="padding: 2px">{{ $peta->judul_peta }}</td>
                                        <td class="text-left" style="padding: 2px">{{ $peta->formatted_tanggal_upload }}</td>
                                        <td style="padding: 2px">
                                            @if ($peta->file_foto)
                                                <a href="{{ url('public') }}/{{ $peta->file_foto }}" target="_blank">
                                                    <i class="fas fa-image"></i> Lihat Gambar
                                                </a>
                                            @else
                                                <p>Tidak ada gambar</p>
                                            @endif
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
