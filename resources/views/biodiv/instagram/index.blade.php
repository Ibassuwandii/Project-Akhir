<x-module.edukasi>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div style="padding-left: 20px;">
                    <h4 class="card-title m-0"><b>Data Zwageri IG</b></h4>
                </div>
                <div>
                    <a href="{{ url('edukasi/instagram/create') }}" class="btn btn-success">
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
                            <th style="padding: 6px" rowspan="2" class="text-center align-middle">No</th>
                            <th style="padding: 6px" rowspan="2" class="text-center align-middle">Aksi</th>
                            <th style="padding: 6px" rowspan="2" class="text-center align-middle">Jenis Postingan</th>
                            <th style="padding: 6px" rowspan="2" class="text-center align-middle">Jumlah Follower</th>
                            <th style="padding: 6px" rowspan="2" class="text-center align-middle">Bulan dan Tahun</th>
                            <th style="padding: 6px" colspan="4" class="text-center">Engagement Rate</th>
                        </tr>
                        <tr class="bg-secondary text-white">
                            <th class="text-center" style="padding: 6px">
                                <i class="fas fa-eye"></i> Penayangan
                            </th>
                            <th class="text-center" style="padding: 6px">
                                <i class="fas fa-thumbs-up"></i> Like
                            </th>
                            <th class="text-center" style="padding: 6px">
                                <i class="fas fa-comment"></i> Coment
                            </th>
                            <th class="text-center" style="padding: 6px">
                                <i class="fas fa-share"></i> Share
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_instagram as $instagram)
                        <tr>
                            <td class="text-center" style="padding: 2px">{{ $loop->iteration }}</td>
                            <td class="text-center" style="padding: 2px">
                                <div class="btn-group">
                                    {{-- <x-template.button.info-button url="edukasi/instagram" id="{{ $instagram->id }}" /> --}}
                                    <x-template.button.edit-button url="edukasi/instagram" id="{{ $instagram->id }}" />
                                    <x-template.button.delete-button id="{{ $instagram->id }}" path="" />
                                </div>
                            </td>
                            <td class="text-left" style="padding: 2px">{{ $instagram->jenis_postingan }}</td>
                            <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $instagram->jumlah_folower }}</td>
                            <td class="text-left" style="padding: 2px">{{ $instagram->bulan }}</td>
                            <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $instagram->penayangan }}</td>
                            <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $instagram->like }}</td>
                            <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $instagram->share }}</td>
                            <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $instagram->coment }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.edukasi>
