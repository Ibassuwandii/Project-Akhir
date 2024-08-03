<x-module.edukasiview>
    @if ($listInstagram->isEmpty())
        <p class="text-center">Tidak ada data Zwageri IG.</p>
    @else
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr class="bg-secondary text-white">
                                <th style="padding: 6px" rowspan="2" class="text-center align-middle">No</th>
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
                            @foreach ($listInstagram as $instagram)
                            <tr>
                                <td class="text-center" style="padding: 2px">{{ $loop->iteration }}</td>
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
    @endif
</x-module.edukasiview>
