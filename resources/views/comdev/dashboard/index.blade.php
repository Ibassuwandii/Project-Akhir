<x-module.comdev>
    <x-utils.notif />
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link anok" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home"
                        role="tab" aria-controls="custom-tabs-one-home" aria-selected="false">Pertanian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link anok" id="custom-tabs-one-profile-tab" data-toggle="pill"
                        href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                        aria-selected="false">Perikanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link anok active" id="custom-tabs-one-messages-tab" data-toggle="pill"
                        href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages"
                        aria-selected="true">Mangrove</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade" id="custom-tabs-one-home" role="tabpanel"
                    aria-labelledby="custom-tabs-one-home-tab">
                    <!-- Diagram Instagram -->
                    <div style="width: 100%; margin-bottom: 100px;">
                        <p style="text-align: center; margin-top: 10px; font-weight: bold;">Diagram Pertanian</p>
                        <div class="chart-container" style="position: relative; height: 300px;">
                            <canvas id="pertanianChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-one-profile-tab">
                    <!-- Diagram Aksi Sampah -->
                    <div style="width: 100%; margin-bottom: 100px;">
                        <p style="text-align: center; margin-top: 10px; font-weight: bold;">Diagram Perikanan</p>
                        <div class="chart-container" style="position: relative; height: 300px;">
                            <canvas id="perikananChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade active show" id="custom-tabs-one-messages" role="tabpanel"
                    aria-labelledby="custom-tabs-one-messages-tab">
                    <!-- Diagram Taman Baca -->
                    <div style="width: 100%; margin-bottom: 50px;">
                        <p style="text-align: center; margin-top: 10px; font-weight: bold;">Diagram Mangrove</p>
                        <div class="chart-container" style="position: relative; height: 300px;">
                            <canvas id="mangroveChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
                    document.addEventListener('DOMContentLoaded', function () {
                // Chart Pertanian
                const pertanianCtx = document.getElementById('pertanianChart').getContext('2d');
                const pertanianData = {!! json_encode($list_pertanian) !!};

                const pertanianLabels = pertanianData.map(item => item.nama_desa);
                const hasilSebelum = pertanianData.map(item => item.hasil_sebelum);
                const hasilTarget = pertanianData.map(item => item.hasil_target);
                const hasilAkhir = pertanianData.map(item => item.hasil_akhir);
                const jumlahLakiLaki = pertanianData.map(item => item.jumlah_penerima_laki_laki);
                const jumlahPerempuan = pertanianData.map(item => item.jumlah_penerima_perempuan);

                const pertanianChart = new Chart(pertanianCtx, {
                    type: 'bar',
                    data: {
                        labels: pertanianLabels,
                        datasets: [{
                                label: 'Hasil Sebelum | KG',
                                data: hasilSebelum,
                                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Hasil Target | KG',
                                data: hasilTarget,
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Hasil Akhir | KG',
                                data: hasilAkhir,
                                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Jumlah Penerima Laki-laki',
                                data: jumlahLakiLaki,
                                backgroundColor: 'rgba(255, 206, 86, 0.5)',
                                borderColor: 'rgba(255, 206, 86, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Jumlah Penerima Perempuan',
                                data: jumlahPerempuan,
                                backgroundColor: 'rgba(153, 102, 255, 0.5)',
                                borderColor: 'rgba(153, 102, 255, 1)',
                                borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        </script>
        <script>
                    document.addEventListener('DOMContentLoaded', function () {
                // Chart Perikanan
                const perikananCtx = document.getElementById('perikananChart').getContext('2d');
                const perikananData = {!! json_encode($list_perikanan) !!};

                const perikananLabels = perikananData.map(item => item.nama_desa);
                const hasilSebelum = perikananData.map(item => item.hasil_sebelum);
                const hasilTarget = perikananData.map(item => item.hasil_target);
                const hasilAkhir = perikananData.map(item => item.hasil_akhir);
                const jumlahLakiLaki = perikananData.map(item => item.jumlah_penerima_laki_laki);
                const jumlahPerempuan = perikananData.map(item => item.jumlah_penerima_perempuan);

                const perikananChart = new Chart(perikananCtx, {
                    type: 'bar',
                    data: {
                        labels: perikananLabels,
                        datasets: [{
                                label: 'Hasil Sebelum | KG',
                                data: hasilSebelum,
                                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Hasil Target | KG',
                                data: hasilTarget,
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Hasil Akhir | KG',
                                data: hasilAkhir,
                                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Jumlah Penerima Laki-laki',
                                data: jumlahLakiLaki,
                                backgroundColor: 'rgba(255, 206, 86, 0.5)',
                                borderColor: 'rgba(255, 206, 86, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Jumlah Penerima Perempuan',
                                data: jumlahPerempuan,
                                backgroundColor: 'rgba(153, 102, 255, 0.5)',
                                borderColor: 'rgba(153, 102, 255, 1)',
                                borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });

            document.addEventListener('DOMContentLoaded', function () {
            // Chart mangrove
        const mangroveData = {!! json_encode($list_mangrove) !!};
        const semesters = mangroveData.map(item => item.semester);
        const bibitHidup = mangroveData.map(item => item.bibit_hidup);
        const bibitMati = mangroveData.map(item => item.bibit_mati);
        const bibitDisemai = mangroveData.map(item => item.bibit_disemai);

        const mangroveChart = new Chart(document.getElementById('mangroveChart'), {
            type: 'bar',
            data: {
                labels: semesters,
                datasets: [{
                        label: 'Bibit Hidup',
                        data: bibitHidup,
                        backgroundColor: 'rgba(75, 192, 192, 0.5)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Bibit Mati',
                        data: bibitMati,
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Bibit Disemai',
                        data: bibitDisemai,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });

        </script>
</x-module.comdev>
