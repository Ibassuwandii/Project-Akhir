<x-module-edukasi>
    @section('content')
    <div class="container">
        <h1>Dashboard</h1>

        <!-- Menampilkan grafik data dari menu Visit School -->
        <div class="card">
            <div class="card-header">Grafik Visit School</div>
            <div class="card-body">
                <canvas id="visitSchoolChart"></canvas>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script>
        var ctx = document.getElementById('visitSchoolChart').getContext('2d');
        var visitSchoolChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($visitSchoolData->pluck('month')) !!},
                datasets: [{
                    label: 'Jumlah Visit School',
                    data: {!! json_encode($visitSchoolData->pluck('count')) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
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
@endsection
</x-module-edukasi>
