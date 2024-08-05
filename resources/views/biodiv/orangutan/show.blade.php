<x-module.biodiv>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title m-0"><b>Detail Observation</b></h4>
        </div>
        <div class="card-body">
            <canvas id="observationChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('observationChart').getContext('2d');
        const observationChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Bulan', 'Metode', 'Observasi', 'Pengamatan', 'Kuantitas'],
                datasets: [{
                    label: 'Observation Details',
                    data: [
                        "{{ $antropogenik->bulan }}",
                        "{{ $antropogenik->metode }}",
                        "{{ $antropogenik->observasi }}",
                        "{{ $antropogenik->pengamatan }}",
                        "{{ $antropogenik->kuantitas }}"
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-module.biodiv>
