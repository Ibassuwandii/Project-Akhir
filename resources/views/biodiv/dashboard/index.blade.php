<x-module.edukasi>
    <x-utils.notif />
    <style>
        .nav-link.anok.active {
            background-color: #ffffff !important;
            color: rgb(1, 1, 1) !important;
        }
        .nav-link {
            color: #b81f1f;
        }
    </style>
    <div class="card card-primary card-tabs">
        <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link anok" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home"
                        role="tab" aria-controls="custom-tabs-one-home" aria-selected="false">Diagram Instagram</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link anok" id="custom-tabs-one-profile-tab" data-toggle="pill"
                        href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                        aria-selected="false">Diagram Aksi Sampah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link anok" id="custom-tabs-one-visit-school-tab" data-toggle="pill"
                        href="#custom-tabs-one-visit-school" role="tab" aria-controls="custom-tabs-one-visit-school"
                        aria-selected="false">Diagram Visit School</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link anok active" id="custom-tabs-one-messages-tab" data-toggle="pill"
                        href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages"
                        aria-selected="true">Diagram Taman Baca</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade" id="custom-tabs-one-home" role="tabpanel"
                    aria-labelledby="custom-tabs-one-home-tab">
                    <!-- Diagram Instagram -->
                    <div style="width: 100%; margin-bottom: 100px;">
                        <p style="text-align: center; margin-top: 10px; font-weight: bold;">Diagram Instagram</p>
                        <div class="chart-container" style="position: relative; height: 300px;">
                            <canvas id="instagramChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-one-profile-tab">
                    <!-- Diagram Aksi Sampah -->
                    <div style="width: 100%; margin-bottom: 100px;">
                        <p style="text-align: center; margin-top: 10px; font-weight: bold;">Diagram Aksi Sampah</p>
                        <div class="chart-container" style="position: relative; height: 300px;">
                            <canvas id="aksiSampahChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-visit-school" role="tabpanel"
                    aria-labelledby="custom-tabs-one-visit-school-tab">
                    <!-- Diagram Visit School -->
                    <div style="width: 100%; margin-bottom: 100px;">
                        <p style="text-align: center; margin-top: 10px; font-weight: bold;">Diagram Visit School</p>
                        <div class="chart-container" style="position: relative; height: 300px;">
                            <canvas id="schoolParticipantsChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade active show" id="custom-tabs-one-messages" role="tabpanel"
                    aria-labelledby="custom-tabs-one-messages-tab">
                    <!-- Diagram Taman Baca -->
                    <div style="width: 100%; margin-bottom: 50px;">
                        <p style="text-align: center; margin-top: 10px; font-weight: bold;">Diagram Taman Baca</p>
                        <div class="chart-container" style="position: relative; height: 300px;">
                            <canvas id="tamanBacaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to format date
            function formatDate(dateString) {
                const options = { day: 'numeric', month: 'long', year: 'numeric' };
                return new Date(dateString).toLocaleDateString('id-ID', options);
            }

            // Chart Visit School
            // const schoolParticipantsCtx = document.getElementById('schoolParticipantsChart').getContext('2d');
            // const schoolParticipantsData = @json($list_visitschool);

            // const schoolParticipantsLabels = schoolParticipantsData.map(item => item.nama_sekolah);
            // const schoolParticipantsLakiLaki = schoolParticipantsData.map(item => item.laki_laki);
            // const schoolParticipantsPerempuan = schoolParticipantsData.map(item => item.perempuan);

            // const schoolParticipantsChart = new Chart(schoolParticipantsCtx, {
            //     type: 'bar',
            //     data: {
            //         labels: schoolParticipantsLabels,
            //         datasets: [{
            //                 label: 'Jumlah Peserta Laki-laki',
            //                 data: schoolParticipantsLakiLaki,
            //                 backgroundColor: 'rgba(54, 162, 235, 0.5)',
            //                 borderColor: 'rgba(54, 162, 235, 1)',
            //                 borderWidth: 1
            //             },
            //             {
            //                 label: 'Jumlah Peserta Perempuan',
            //                 data: schoolParticipantsPerempuan,
            //                 backgroundColor: 'rgba(255, 99, 132, 0.5)',
            //                 borderColor: 'rgba(255, 99, 132, 1)',
            //                 borderWidth: 1
            //             }
            //         ]
            //     },
            //     options: {
            //         responsive: true,
            //         maintainAspectRatio: false,
            //         scales: {
            //             x: {
            //                 title: {
            //                     display: true,
            //                     text: 'Nama Sekolah'
            //                 }
            //             },
            //             y: {
            //                 beginAtZero: true,
            //                 title: {
            //                     display: true,
            //                     text: 'Jumlah Peserta'
            //                 }
            //             }
            //         }
            //     }
            // });

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
            const tamanBacaTotalPinjam = tamanBacaData.map(item => item.total_pinjam);

            const tamanBacaChart = new Chart(tamanBacaCtx, {
                type: 'bar',
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Chart Visit School
        const schoolParticipantsCtx = document.getElementById('schoolParticipantsChart').getContext('2d');
        const schoolParticipantsData = @json($list_visitschool);

        // Check the data in the console to ensure it contains the expected fields
        console.log(schoolParticipantsData);

        const schoolParticipantsLabels = schoolParticipantsData.map(item => item.nama_sekolah);
        const schoolParticipantsLakiLaki = schoolParticipantsData.map(item => item.laki_laki);
        const schoolParticipantsPerempuan = schoolParticipantsData.map(item => item.perempuan);

        const schoolParticipantsChart = new Chart(schoolParticipantsCtx, {
            type: 'bar',
            data: {
                labels: schoolParticipantsLabels,
                datasets: [{
                        label: 'Jumlah Peserta Laki-laki',
                        data: schoolParticipantsLakiLaki,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Jumlah Peserta Perempuan',
                        data: schoolParticipantsPerempuan,
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Nama Sekolah'
                        },
                        ticks: {
                            autoSkip: false,
                            maxRotation: 90,
                            minRotation: 45
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Peserta'
                        }
                    }
                }
            }
        });
    });
</script>

</x-module.edukasi>
