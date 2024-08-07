<x-module.edukasiview>
    @if ($listAksisampah->isEmpty())
        <p class="text-center">Tidak ada aksi sampah.</p>
    @else
        <div class="card">
            <div class="card-header bg-primary text-white">
                <div class="card-title">
                    Data Aksi Sampah
                </div>
            </div>
            <div class="card-body">
                <!-- Tambahkan elemen canvas untuk grafik batang -->
                <div class="mb-4">
                    <canvas id="aksiSampahBarChart"></canvas>
                </div>

                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th style="padding: 6px; width: 50px;" rowspan="2" class="text-center align-middle">No</th>
                                <th style="padding: 6px" rowspan="2" class="text-center align-middle">Lokasi Kegiatan</th>
                                <th style="padding: 6px" rowspan="2" class="text-center align-middle">Jumlah Peserta</th>
                                <th style="padding: 6px" rowspan="2" class="text-center align-middle">Tanggal Kegiatan</th>
                                <th style="padding: 6px" colspan="2" class="text-center">Sampah</th>
                            </tr>
                            <tr>
                                <th style="padding: 6px; width: 90px;" class="text-center">Total</th>
                                <th style="padding: 6px; width: 150px;" class="text-center">Jenis</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listAksisampah as $aksisampah)
                                <tr>
                                    <td style="padding: 6px">{{ $loop->iteration }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $aksisampah->lokasi }}</td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $aksisampah->jumlah_peserta }}</td>
                                    <td class="text-left" style="padding: 2px">{{ \Carbon\Carbon::parse($aksisampah->tanggal)->translatedFormat('d F Y') }}</td>
                                    <td class="text-right" style="padding: 2px 20px 1px 1px;">{{ $aksisampah->jumlah_sampah }}</td>
                                    <td class="text-left" style="padding: 2px">{{ $aksisampah->jenis_sampah }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tambahkan JavaScript untuk membuat grafik batang -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const barCtx = document.getElementById('aksiSampahBarChart').getContext('2d');

                // Siapkan data untuk grafik batang
                const labels = @json($listAksisampah->pluck('tanggal')->map(fn($date) => \Carbon\Carbon::parse($date)->translatedFormat('d F Y')));
                const lokasiData = @json($listAksisampah->pluck('lokasi'));
                const pesertaData = @json($listAksisampah->pluck('jumlah_peserta'));
                const sampahData = @json($listAksisampah->pluck('jumlah_sampah'));

                // Buat grafik batang
                const aksiSampahBarChart = new Chart(barCtx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                label: 'Jumlah Peserta',
                                data: pesertaData,
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Total Sampah (KG)',
                                data: sampahData,
                                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            tooltip: {
                                callbacks: {
                                    title: function(tooltipItems) {
                                        return lokasiData[tooltipItems[0].dataIndex];
                                    },
                                    label: function(context) {
                                        let label = context.dataset.label || '';
                                        if (label) {
                                            label += ': ';
                                        }
                                        if (context.parsed.y !== null) {
                                            label += context.parsed.y;
                                        }
                                        return label;
                                    }
                                }
                            }
                        },
                        scales: {
                            x: {
                                stacked: true,
                                title: {
                                    display: true,
                                    text: 'Tanggal Kegiatan'
                                }
                            },
                            y: {
                                stacked: true,
                                title: {
                                    display: true,
                                    text: 'Jumlah'
                                }
                            }
                        }
                    }
                });
            });
        </script>
    @endif
</x-module.edukasiview>
