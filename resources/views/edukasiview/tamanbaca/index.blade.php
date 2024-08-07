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
                <!-- Filter Container -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="filterJenisBuku">Filter Jenis Buku</label>
                        <select id="filterJenisBuku" class="form-control">
                            <option value="">Semua Jenis</option>
                            @foreach ($listTamanbaca->pluck('jenis_buku')->unique() as $jenis)
                                <option value="{{ $jenis }}">{{ $jenis }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="filterBulanPinjam">Filter Bulan</label>
                        <select id="filterBulanPinjam" class="form-control">
                            <option value="">Semua Bulan</option>
                            @foreach ($listTamanbaca->pluck('bulan_pinjam')->unique() as $bulan)
                                <option value="{{ $bulan }}">{{ $bulan }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Chart Container -->
                <div class="row mb-4">
                    <div class="col-md-9">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <canvas id="rightPieChart" style="max-width: 150px;"></canvas>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr class="bg-secondary text-white">
                                <th style="padding: 6px; width: 10px;" rowspan="2">No</th>
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('myChart').getContext('2d');
            var rightPieCtx = document.getElementById('rightPieChart').getContext('2d');

            var data = {
                labels: @json($listTamanbaca->pluck('bulan_pinjam')),
                datasets: [{
                    label: 'Total Buku',
                    data: @json($listTamanbaca->pluck('total_buku')),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }, {
                    label: 'Total Dipinjam',
                    data: @json($listTamanbaca->pluck('total_pinjam')),
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            };

            var options = {
                scales: {
                    x: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Bulan Pinjam'
                        }
                    },
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            afterLabel: function(tooltipItem) {
                                return 'Jenis Buku: ' + @json($listTamanbaca->pluck('jenis_buku'))[tooltipItem.dataIndex];
                            }
                        }
                    }
                }
            };

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: options
            });

            var pieData = {
                labels: ['Total Buku', 'Total Dipinjam'],
                datasets: [{
                    data: [
                        @json($listTamanbaca->sum('total_buku')),
                        @json($listTamanbaca->sum('total_pinjam'))
                    ],
                    backgroundColor: ['rgba(54, 162, 235, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                    borderColor: ['rgba(54, 162, 235, 1)', 'rgba(255, 99, 132, 1)'],
                    borderWidth: 1
                }]
            };

            var rightPieChart = new Chart(rightPieCtx, {
                type: 'pie',
                data: pieData,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top'
                        }
                    }
                }
            });

            function updateChart() {
                var filterJenisBuku = document.getElementById('filterJenisBuku').value;
                var filterBulanPinjam = document.getElementById('filterBulanPinjam').value;

                var filteredData = @json($listTamanbaca).filter(function(item) {
                    return (filterJenisBuku === '' || item.jenis_buku === filterJenisBuku) &&
                           (filterBulanPinjam === '' || item.bulan_pinjam === filterBulanPinjam);
                });

                myChart.data.labels = filteredData.map(function(item) { return item.jenis_buku; });
                myChart.data.datasets[0].data = filteredData.map(function(item) { return item.total_buku; });
                myChart.data.datasets[1].data = filteredData.map(function(item) { return item.total_pinjam; });
                myChart.update();

                rightPieChart.data.datasets[0].data = [
                    filteredData.reduce((acc, item) => acc + item.total_buku, 0),
                    filteredData.reduce((acc, item) => acc + item.total_pinjam, 0)
                ];
                rightPieChart.update();
            }

            document.getElementById('filterJenisBuku').addEventListener('change', updateChart);
            document.getElementById('filterBulanPinjam').addEventListener('change', updateChart);
        });
    </script>
</x-module.edukasiview>
