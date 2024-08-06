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
            <!-- Filter Options -->
            <div class="d-flex justify-content-start mb-3">
                <select id="filterMethod" class="form-control mr-2">
                    <option value="">Pilih Metode</option>
                    @foreach ($methods as $method)
                        <option value="{{ $method }}">{{ $method }}</option>
                    @endforeach
                </select>
                <select id="filterObservasi" class="form-control mr-2">
                    <option value="">Pilih Observasi</option>
                    @foreach ($observasis as $observasi)
                        <option value="{{ $observasi }}">{{ $observasi }}</option>
                    @endforeach
                </select>
                <select id="filterPengamatan" class="form-control mr-2">
                    <option value="">Pilih Pengamatan</option>
                    @foreach ($pengamatans as $pengamatan)
                        <option value="{{ $pengamatan }}">{{ $pengamatan }}</option>
                    @endforeach
                </select>
                <button id="applyFilters" class="btn btn-primary">Terapkan Filter</button>
            </div>

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
                    <tbody id="tableBody">
                        @foreach ($list_antropogenik as $antropogenik)
                        <tr style="padding: 2px">
                            <td class="text-center" style="padding: 2px">{{ $loop->iteration }}</td>
                            <td class="text-center" style="padding: 2px">
                                <div class="btn-group">
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
            const data = @json($list_antropogenik);
            const totalQuantity = @json($totalQuantity);
            const tableBody = document.getElementById('tableBody');
            const filterMethod = document.getElementById('filterMethod');
            const filterObservasi = document.getElementById('filterObservasi');
            const filterPengamatan = document.getElementById('filterPengamatan');
            const applyFilters = document.getElementById('applyFilters');

            function generateChart(filteredData) {
                const groupedData = filteredData.reduce((acc, item) => {
                    const year = item.bulan.split('-')[0];
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

                datasets.push({
                    label: 'Total Quantity',
                    data: labels.map(year => totalQuantity[year] || 0),
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                    type: 'line'
                });

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
            }

            function updateTable(filteredData) {
                tableBody.innerHTML = '';
                filteredData.forEach((item, index) => {
                    const row = `
                        <tr style="padding: 2px">
                            <td class="text-center" style="padding: 2px">${index + 1}</td>
                            <td class="text-center" style="padding: 2px">
                                <div class="btn-group">
                                    <x-template.button.edit-button url="biodiv/antropogenik" id="${item.id}" />
                                    <x-template.button.delete-button id="${item.id}" path="" />
                                </div>
                            </td>
                            <td class="text-left" style="padding: 2px">${item.bulan}</td>
                            <td class="text-left" style="padding: 2px">${item.metode}</td>
                            <td class="text-left" style="padding: 2px">${item.observasi}</td>
                            <td class="text-left" style="padding: 2px">${item.pengamatan}</td>
                            <td class="text-right" style="padding: 1px 20px 1px 1px;">${item.kuantitas}</td>
                        </tr>
                    `;
                    tableBody.innerHTML += row;
                });
                generateChart(filteredData);
            }

            applyFilters.addEventListener('click', function() {
                const method = filterMethod.value;
                const observasi = filterObservasi.value;
                const pengamatan = filterPengamatan.value;

                const filteredData = data.filter(item => {
                    return (method === '' || item.metode === method) &&
                           (observasi === '' || item.observasi === observasi) &&
                           (pengamatan === '' || item.pengamatan === pengamatan);
                });

                updateTable(filteredData);
            });

            generateChart(data);
        });

        function getRandomColor() {
            const colors = [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(199, 199, 199, 0.6)'
            ];
            return colors[Math.floor(Math.random() * colors.length)];
        }
    </script>
</x-module.biodiv>
