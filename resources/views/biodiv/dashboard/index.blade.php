<x-module.biodiv>
    <style>
        /* CSS untuk Tab */
        .card-tabs .nav-link.active {
            background-color: #d0d8d8 !important;
            color: rgb(1, 1, 1) !important;
        }
    </style>
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home"
                        role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Diagram Biodiversity
                        Report-PGL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                        href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                        aria-selected="false">Diagram Biodiversity Report-BBBR NP </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill"
                        href="#custom-tabs-one-contact" role="tab" aria-controls="custom-tabs-one-contact"
                        aria-selected="false">Diagram Orangutan Population</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                    aria-labelledby="custom-tabs-one-home-tab">
                    <!-- Diagram Biodiversity Report-PGL -->
                    <div style="width: 100%; margin-bottom: 100px;">
                        <p style="text-align: center; margin-top: 10px; font-weight: bold;">Diagram Biodiversity
                            Report-PGL</p>
                        <div class="chart-container" style="position: relative; height: 300px;">
                            <canvas id="pglChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-one-profile-tab">
                    <!-- Diagram Biodiversity Report-BBBR NP -->
                    <div style="width: 100%; margin-bottom: 100px;">
                        <p style="text-align: center; margin-top: 10px; font-weight: bold;">Diagram Biodiversity
                            Report-BBBR NP</p>
                            <div class="chart-container" style="position: relative; height: 300px;">
                                <canvas id="observationChart"></canvas>
                            </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel"
                    aria-labelledby="custom-tabs-one-contact-tab">
                    <!-- Diagram Orangutan Population -->
                    <div style="width: 100%; margin-bottom: 100px;">
                        <p style="text-align: center; margin-top: 10px; font-weight: bold;">Diagram Orangutan Population
                        </p>
                        <div class="chart-container" style="position: relative; height: 300px;">
                            <canvas id="orangutanChart"></canvas>
                        </div>
                        <!-- Additional content or chart for this tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const data = @json($list_antropogenik);
            const totalQuantity = @json($totalQuantity);

            let chartInstance = null;

            function generateChart(filteredData) {
                // Clean up existing chart if any
                if (chartInstance) {
                    chartInstance.destroy();
                }

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

                const ctx = document.getElementById('pglChart').getContext('2d');
                chartInstance = new Chart(ctx, {
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
                                    label: function(context) {
                                        return context.dataset.label + ': ' + context.raw;
                                    }
                                }
                            }
                        }
                    }
                });
            }

            // Initialize the chart with the full data
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const orangutanData = @json($list_orangutan);
            const ctx = document.getElementById('orangutanChart').getContext('2d');

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

            document.getElementById('filterButton').addEventListener('click', filterData);
        });
    </script>
</x-module.biodiv>
