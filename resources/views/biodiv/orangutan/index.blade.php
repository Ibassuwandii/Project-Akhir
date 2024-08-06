<x-module.biodiv>
    <x-utils.notif />
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div style="padding-left: 20px;">
                    <h4 class="card-title m-0"><b>Details Survey</b></h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <!-- Filter Options -->
            <div class="mb-3 d-flex justify-content-between">
                <div class="form-group">
                    <label for="filterLocation">Filter by Location:</label>
                    <select id="filterLocation" class="form-control">
                        <option value="">All Locations</option>
                        @foreach ($list_orangutan->unique('lokasi') as $orangutan)
                            <option value="{{ $orangutan->lokasi }}">{{ $orangutan->lokasi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="filterHabitat">Filter by Habitat Type:</label>
                    <select id="filterHabitat" class="form-control">
                        <option value="">All Habitat Types</option>
                        @foreach ($list_orangutan->unique('tipe_habitat') as $orangutan)
                            <option value="{{ $orangutan->tipe_habitat }}">{{ $orangutan->tipe_habitat }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Chart -->
            <div class="mb-4">
                <canvas id="orangutanChart"></canvas>
            </div>
            <!-- Button to Add Data -->
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ url('biodiv/orangutan/create') }}" class="btn btn-success">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('orangutanChart').getContext('2d');
            let orangutanData = @json($list_orangutan);

            const orangutanChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: orangutanData.map(item => item.tanggal),
                    datasets: [{
                            label: 'Number of Nests',
                            data: orangutanData.map(item => item.jumlah_sarang),
                            backgroundColor: 'rgba(75, 192, 192, 0.7)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            borderRadius: 10
                        },
                        {
                            label: 'Total Transect Length (m)',
                            data: orangutanData.map(item => item.total_panjang),
                            backgroundColor: 'rgba(153, 102, 255, 0.7)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1,
                            borderRadius: 10
                        },
                        {
                            label: 'Number of Transects',
                            data: orangutanData.map(item => item.jumlah_transek),
                            backgroundColor: 'rgba(255, 159, 64, 0.7)',
                            borderColor: 'rgba(255, 159, 64, 1)',
                            borderWidth: 1,
                            borderRadius: 10
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top',
                            labels: {
                                boxWidth: 20,
                                padding: 15,
                                font: {
                                    size: 14,
                                    family: 'Arial, sans-serif',
                                    weight: 'bold'
                                },
                                color: '#333'
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleFont: {
                                size: 16,
                                family: 'Arial, sans-serif',
                                weight: 'bold'
                            },
                            bodyFont: {
                                size: 14,
                                family: 'Arial, sans-serif'
                            },
                            callbacks: {
                                title: function(tooltipItems) {
                                    const index = tooltipItems[0].dataIndex;
                                    return 'Date: ' + orangutanData[index].tanggal;
                                },
                                label: function(tooltipItem) {
                                    const index = tooltipItem.dataIndex;
                                    const dataset = tooltipItem.dataset;
                                    const label = dataset.label;
                                    const value = dataset.data[index];
                                    const lokasi = orangutanData[index].lokasi;
                                    const tipe_habitat = orangutanData[index].tipe_habitat;
                                    return label + ': ' + value + '\nLocation: ' + lokasi +
                                        '\nHabitat Type: ' + tipe_habitat;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 10,
                                font: {
                                    size: 12,
                                    family: 'Arial, sans-serif'
                                },
                                color: '#333'
                            },
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            }
                        },
                        x: {
                            ticks: {
                                font: {
                                    size: 12,
                                    family: 'Arial, sans-serif'
                                },
                                color: '#333'
                            },
                            grid: {
                                display: false
                            }
                        }
                    },
                    layout: {
                        padding: {
                            top: 20,
                            bottom: 20,
                            left: 20,
                            right: 20
                        }
                    },
                    elements: {
                        bar: {
                            borderWidth: 2,
                            borderRadius: 10,
                            hoverBackgroundColor: 'rgba(255, 99, 132, 0.7)',
                            hoverBorderColor: 'rgba(255, 99, 132, 1)'
                        }
                    }
                }
            });

            function filterData() {
                const filterLocation = document.getElementById('filterLocation').value;
                const filterHabitat = document.getElementById('filterHabitat').value;

                let filteredData = orangutanData;
                if (filterLocation) {
                    filteredData = filteredData.filter(item => item.lokasi === filterLocation);
                }
                if (filterHabitat) {
                    filteredData = filteredData.filter(item => item.tipe_habitat === filterHabitat);
                }

                updateTable(filteredData);
                updateChart(filteredData);
            }

            function updateTable(data) {
                const tbody = document.getElementById('orangutanTableBody');
                tbody.innerHTML = '';
                data.forEach((item, index) => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td class="text-center" style="padding: 2px">${index + 1}</td>
                        <td class="text-center" style="padding: 2px">
                            <div class="btn-group">
                                <x-template.button.edit-button url="biodiv/orangutan" id="${item.id}" />
                                <x-template.button.delete-button id="${item.id}" path="" />
                            </div>
                        </td>
                        <td class="text-left" style="padding: 2px">${item.tanggal}</td>
                        <td class="text-left" style="padding: 2px">${item.lokasi}</td>
                        <td class="text-left" style="padding: 2px">${item.tipe_habitat}</td>
                        <td class="text-right" style="padding: 1px 20px 1px 1px;">${item.jumlah_transek}</td>
                        <td class="text-right" style="padding: 1px 20px 1px 1px;">${item.total_panjang}</td>
                        <td class="text-right" style="padding: 1px 20px 1px 1px;">${item.jumlah_sarang}</td>
                        <td class="text-right" style="padding: 1px 20px 1px 1px;">${item.kepadatan}</td>
                    `;
                    tbody.appendChild(row);
                });
            }

            function updateChart(data) {
                orangutanChart.data.labels = data.map(item => item.tanggal);
                orangutanChart.data.datasets[0].data = data.map(item => item.jumlah_sarang);
                orangutanChart.data.datasets[1].data = data.map(item => item.total_panjang);
                orangutanChart.data.datasets[2].data = data.map(item => item.jumlah_transek);
                orangutanChart.update();
            }

            document.getElementById('filterLocation').addEventListener('change', filterData);
            document.getElementById('filterHabitat').addEventListener('change', filterData);
        });
    </script>
</x-module.biodiv>
