<x-module.edukasi>
    <x-utils.notif />
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <div style="padding-left: 15px;">
                <h4 class="card-title m-0"><b>Selamat Datang Di Halaman Dashboard Divisi Edukasi</b></h4>
            </div>
        </div>
        <div class="card-body" style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between;">

            <!-- Diagram Instagram -->
            <div style="width: 100%; margin-bottom: 100px;">
                <p style="text-align: center; margin-top: 10px; font-weight: bold;">Diagram Instagram</p>
                <div class="chart-container" style="position: relative; height: 300px;">
                    <canvas id="instagramChart"></canvas>
                </div>
            </div>

            <!-- Diagram Aksi Sampah -->
            <div style="width: 100%; margin-bottom: 100px;">
                <p style="text-align: center; margin-top: 10px; font-weight: bold;">Diagram Aksi Sampah</p>
                <div class="chart-container" style="position: relative; height: 300px;">
                    <canvas id="aksiSampahChart"></canvas>
                </div>
            </div>
        </div>
        <div>
            <!-- Diagram Taman Baca -->
            <div style="width: 100%; margin-bottom: 50px;">
                <p style="text-align: center; margin-top: 10px; font-weight: bold;">Diagram Taman Baca</p>
                <div class="chart-container" style="position: relative; height: 300px;">
                    <canvas id="tamanBacaChart"></canvas>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Chart Instagram
            const instagramCtx = document.getElementById('instagramChart').getContext('2d');
            const instagramData = @json($list_instagram);

            const instagramLabels = instagramData.map(item => item.bulan);
            const instagramFollowers = instagramData.map(item => item.jumlah_folower);
            const instagramViews = instagramData.map(item => item.penayangan);
            const instagramLikes = instagramData.map(item => item.like);
            const instagramComments = instagramData.map(item => item.coment);
            const instagramShares = instagramData.map(item => item.share);

            const instagramChart = new Chart(instagramCtx, {
                type: 'bar',
                data: {
                    labels: instagramLabels,
                    datasets: [{
                            label: 'Followers',
                            data: instagramFollowers,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Views',
                            data: instagramViews,
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Likes',
                            data: instagramLikes,
                            backgroundColor: 'rgba(255, 159, 64, 0.2)',
                            borderColor: 'rgba(255, 159, 64, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Comments',
                            data: instagramComments,
                            backgroundColor: 'rgba(255, 205, 86, 0.2)',
                            borderColor: 'rgba(255, 205, 86, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Shares',
                            data: instagramShares,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
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

            // Chart Aksi Sampah
            const aksiSampahCtx = document.getElementById('aksiSampahChart').getContext('2d');
            const aksiSampahData = @json($list_aksisampah);

            const aksiSampahLabels = aksiSampahData.map(item => item.tanggal);
            const aksiSampahJumlahPeserta = aksiSampahData.map(item => item.jumlah_peserta);
            const aksiSampahJumlahSampah = aksiSampahData.map(item => item.jumlah_sampah);

            const aksiSampahChart = new Chart(aksiSampahCtx, {
                type: 'bar',
                data: {
                    labels: aksiSampahLabels,
                    datasets: [{
                            label: 'Jumlah Peserta',
                            data: aksiSampahJumlahPeserta,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Jumlah Sampah (Kilogram)',
                            data: aksiSampahJumlahSampah,
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
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

            // Chart Taman Baca
            const tamanBacaCtx = document.getElementById('tamanBacaChart').getContext('2d');
            const tamanBacaData = @json($list_tamanbaca);

            const tamanBacaLabels = tamanBacaData.map(item => item.bulan_pinjam);
            const tamanBacaTotalBuku = tamanBacaData.map(item => item.total_buku);
            const tamanBacaTotalPengunjung = tamanBacaData.map(item => item.total_pengunjung);
            const tamanBacaTotalPinjam = tamanBacaData.map(item => item.total_pinjam);

            const tamanBacaChart = new Chart(tamanBacaCtx, {
                type: 'line',
                data: {
                    labels: tamanBacaLabels,
                    datasets: [{
                            label: 'Total Buku',
                            data: tamanBacaTotalBuku,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Total Pengunjung',
                            data: tamanBacaTotalPengunjung,
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Total Buku Dipinjam',
                            data: tamanBacaTotalPinjam,
                            backgroundColor: 'rgba(255, 159, 64, 0.2)',
                            borderColor: 'rgba(255, 159, 64, 1)',
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
</x-module.edukasi>
