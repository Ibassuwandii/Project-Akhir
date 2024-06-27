<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
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
                            <th rowspan="2" class="text-center align-middle">No</th>
                            <th rowspan="2" class="text-center align-middle">Aksi</th>
                            <th rowspan="2" class="text-center align-middle">Jenis Postingan</th>
                            <th rowspan="2" class="text-center align-middle">Jumlah Follower</th>
                            <th rowspan="2" class="text-center align-middle">Bulan dan Tahun</th>
                            <th colspan="4" class="text-center">Engagement Rate</th>
                        </tr>
                        <tr class="bg-secondary text-white">
                            <th class="text-center">
                                <i class="fas fa-eye"></i> Penayangan
                            </th>
                            <th class="text-center">
                                <i class="fas fa-thumbs-up"></i> Like
                            </th>
                            <th class="text-center">
                                <i class="fas fa-comment"></i> Coment
                            </th>
                            <th class="text-center">
                                <i class="fas fa-share"></i> Share
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_instagram as $instagram)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-template.button.info-button url="edukasi/instagram" id="{{ $instagram->id }}" />
                                    <x-template.button.edit-button url="edukasi/instagram" id="{{ $instagram->id }}" />
                                    <x-template.button.delete-button id="{{ $instagram->id }}" path="" />
                                </div>
                            </td>
                            <td class="text-left">{{ $instagram->jenis_postingan }}</td>
                            <td class="text-left">{{ $instagram->jumlah_folower }}</td>
                            <td class="text-left">{{ $instagram->bulan }}</td>
                            <td class="text-left">{{ $instagram->penayangan }}</td>
                            <td class="text-left">{{ $instagram->like }}</td>
                            <td class="text-left">{{ $instagram->share }}</td>
                            <td class="text-left">{{ $instagram->coment }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-module.edukasi>
