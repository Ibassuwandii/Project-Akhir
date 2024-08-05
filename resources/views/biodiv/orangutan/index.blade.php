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
                    <tbody>
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
                                <td class="text-right" style="padding: 1px 20px 1px 1px;">{{ $orangutan->jumlah_transek }}</td>
                                <td class="text-right" style="padding: 1px 20px 1px 1px;">{{ $orangutan->total_panjang }}</td>
                                <td class="text-right" style="padding: 1px 20px 1px 1px;">{{ $orangutan->jumlah_sarang }}</td>
                                <td class="text-right" style="padding: 1px 20px 1px 1px;">{{ $orangutan->kepadatan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('orangutanChart').getContext('2d');
            const orangutanChart = new Chart(ctx, {
                type: 'bar', // Choose chart type (bar, line, etc.)
                data: {
                    labels: @json($list_orangutan->pluck('tanggal')), // X-axis labels
                    datasets: [
                        {
                            label: 'Number of Nests',
                            data: @json($list_orangutan->pluck('jumlah_sarang')), // Data for number of nests
                            backgroundColor: 'rgba(75, 192, 192, 0.5)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            borderRadius: 5 // Rounded bars
                        },
                        {
                            label: 'Total Transect Length (m)',
                            data: @json($list_orangutan->pluck('total_panjang')), // Data for total transect length
                            backgroundColor: 'rgba(153, 102, 255, 0.5)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1,
                            borderRadius: 5 // Rounded bars
                        },
                        {
                            label: 'Number of Transects',
                            data: @json($list_orangutan->pluck('jumlah_transek')), // Data for number of transects
                            backgroundColor: 'rgba(255, 159, 64, 0.5)',
                            borderColor: 'rgba(255, 159, 64, 1)',
                            borderWidth: 1,
                            borderRadius: 5 // Rounded bars
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
                                padding: 15
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.dataset.label + ': ' + tooltipItem.raw;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 10
                            },
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)' // Lighter grid lines
                            }
                        },
                        x: {
                            grid: {
                                display: false // Hide x-axis grid lines
                            }
                        }
                    },
                    layout: {
                        padding: 20 // Add padding around the chart
                    }
                }
            });
        });
    </script>

</x-module.biodiv>
