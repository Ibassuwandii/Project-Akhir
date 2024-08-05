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
            <!-- Chart Canvas -->
            <div class="chart-container">
                <canvas id="myChart"></canvas>
            </div>

            <!-- Button to Add Data -->
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ url('biodiv/antropogenik/create') }}" class="btn btn-success">
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
                        @foreach ($list_antropogenik as $antropogenik)
                        <tr style="padding: 2px">
                            <td class="text-center" style="padding: 2px">{{ $loop->iteration }}</td>
                            <td class="text-center" style="padding: 2px">
                                <div class="btn-group">
                                    {{-- <x-template.button.info-button url="biodiv/antropogenik" id="{{ $antropogenik->id }}" /> --}}
                                    <x-template.button.edit-button url="biodiv/antropogenik" id="{{ $antropogenik->id }}" />
                                    <x-template.button.delete-button id="{{ $antropogenik->id }}" path="" />
                                </div>
                            </td>
                            <td class="text-left" style="padding: 2px">{{ $antropogenik->bulan }}</td>
                            <td class="text-left" style="padding: 2px">{{ $antropogenik->metode }}</td>
                            <td class="text-left" style="padding: 2px">{{ $antropogenik->observasi }}</td>
                            <td class="text-left" style="padding: 2px">{{ $antropogenik->pengamatan }}</td>
                            <td class="text-right" style="padding: 1px 20px 1px 1px;">{{ $antropogenik->kuantitas }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Ambil data dari Blade template
            const data = @json($list_antropogenik);
            const totalQuantity = @json($totalQuantity);

            // Mengelompokkan data berdasarkan tahun dan kategori observasi
            const groupedData = data.reduce((acc, item) => {
                const year = item.bulan.split('-')[0]; // Asumsi format YYYY-MM
                const category = item.observasi;
                if (!acc[year]) {
                    acc[year] = {};
                }
                if (!acc[year][category]) {
                    acc[year][category] = 0;
                }
                acc[year][category] += item.kuantitas;
                return acc;
            }, {});

            // Menyiapkan data untuk chart
            const labels = Object.keys(groupedData).sort();
            const datasets = [];
            const categories = new Set();

            labels.forEach(year => {
                Object.keys(groupedData[year]).forEach(category => {
                    categories.add(category);
                });
            });

            categories.forEach(category => {
                datasets.push({
                    label: category,
                    data: labels.map(year => groupedData[year][category] || 0),
                    backgroundColor: getRandomColor(),
                    borderColor: 'rgba(0, 0, 0, 0.1)',
                    borderWidth: 1
                });
            });

            // Tambahkan dataset total quantity
            datasets.push({
                label: 'Total Quantity',
                data: labels.map(year => totalQuantity[year] || 0),
                backgroundColor: 'rgba(255, 99, 132, 0.2)', // Warna untuk total quantity
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                type: 'line' // Menampilkan total quantity sebagai garis
            });

            // Membuat chart
            const ctx = document.getElementById('myChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: datasets
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            stacked: true
                        },
                        y: {
                            stacked: true
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top'
                        },
                        tooltip: {
                            callbacks: {
                                label: function (context) {
                                    return context.dataset.label + ': ' + context.raw;
                                }
                            }
                        }
                    }
                }
            });
        });

        // Fungsi untuk menghasilkan warna acak
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    </script>
</x-module.biodiv>
