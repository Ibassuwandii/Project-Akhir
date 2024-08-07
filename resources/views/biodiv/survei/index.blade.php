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
            <div class="mb-4">
                <canvas id="observationChart"></canvas>
            </div>
            <!-- Button to Add Data -->
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ url('biodiv/survei/create') }}" class="btn btn-success">
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
                            <th style="padding: 6px" class="text-center">Bulan</th>
                            <th style="padding: 6px" class="text-center">Taxa</th>
                            <th style="padding: 6px" class="text-center">Species</th>
                            <th style="padding: 6px" class="text-center">English Name</th>
                            <th style="padding: 6px" class="text-center">IUCN Redist Status</th>
                            <th style="padding: 6px" class="text-center">Protected by Indonesia Law</th>
                            <th style="padding: 6px" class="text-center">Observations</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_survei as $survei)
                            <tr style="padding: 2px">
                                <td class="text-center" style="padding: 2px">{{ $loop->iteration }}</td>
                                <td class="text-center" style="padding: 2px">
                                    <div class="btn-group">
                                        {{-- <x-template.button.info-button url="biodiv/survei" id="{{ $survei->id }}" /> --}}
                                        <x-template.button.edit-button url="biodiv/survei" id="{{ $survei->id }}" />
                                        <x-template.button.delete-button id="{{ $survei->id }}" path="" />
                                    </div>
                                </td>
                                <td class="text-left" style="padding: 2px">{{ $survei->formatted_bulan }}</td>
                                <td class="text-left" style="padding: 2px">{{ $survei->taxa }}</td>
                                <td class="text-left" style="padding: 2px">{{ $survei->species }}</td>
                                <td class="text-left" style="padding: 2px">{{ $survei->english_name }}</td>
                                <td class="text-left" style="padding: 2px">{{ $survei->daftar_merah }}</td>
                                <td class="text-left" style="padding: 2px">{{ $survei->law }}</td>
                                <td class="text-right" style="padding: 1px 20px 1px 1px;">{{ $survei->observation }}
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
            // Data from the server
            const data = @json($list_survei);

            // Extract unique months
            const months = [...new Set(data.map(survei => survei.formatted_bulan))].sort();

            // Initialize data structure
            const taxa = [...new Set(data.map(survei => survei.taxa))];
            const dataset = taxa.map(taxaType => {
                return {
                    label: taxaType,
                    data: months.map(month => {
                        // Filter data for each month and taxa
                        const filteredData = data
                            .filter(survei => survei.taxa === taxaType && survei.formatted_bulan ===
                                month);

                        // If no data is found, return 0
                        if (filteredData.length === 0) {
                            return 0;
                        }

                        // Sum up the observations for this taxa and month
                        return filteredData.reduce((sum, survei) => sum + parseFloat(survei
                            .observation), 0);
                    }),
                    backgroundColor: getRandomColor(),
                    borderColor: getRandomColor(),
                    borderWidth: 1
                };
            });

            // Function to generate random colors for each taxa
            function getRandomColor() {
                const letters = '0123456789ABCDEF';
                let color = '#';
                for (let i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }

            // Create chart
            const ctx = document.getElementById('observationChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: months,
                    datasets: dataset
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': ' + context.raw;
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            stacked: true, // Stack the bars for better comparison
                            beginAtZero: true
                        },
                        y: {
                            stacked: true, // Stack the bars for better comparison
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return Number(value).toFixed(
                                        0); // Format number without decimal places
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>

</x-module.biodiv>
