<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your Custom CSS -->
    <style>
         .sidebar {
            position: fixed;
            overflow-y: auto;
            background-color: #343a40;
            color: white;
            width: 250px; /* Sesuaikan lebar sidebar */
            height: 100%; /* Pastikan tinggi sidebar memenuhi tinggi layar */
        }
        .brand-link {
            display: block; /* Agar tautan meregang ke lebar sidebar */
            padding: 15px; /* Beri sedikit ruang di sekitar logo */
        }
        .nav-item {
            font-size: 14px; /* Sesuaikan ukuran font */
        }
        .content {
            font-size: 14px; /* Sesuaikan ukuran font konten */
            overflow: hidden;
        }
        .pagination {
        display: none;
        }
        .card-header {
            padding: 0px; /* Sesuaikan jarak header card */
            justify-content: space-between;
            align-items: center;
        }
        .card-title {
            font-size: 14px; /* Sesuaikan ukuran font header card */
            align-items: center;
            justify-content: space-between;
        }
         .table-margin {
            margin-top: 20px; /* Sesuaikan jarak yang diinginkan */
        }
    </style>
</head>
<body>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <div class="sidebar">
            <a href="" class="brand-link">
                <img src="{{ url('public') }}/dist/img/logoyiari.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold"> YIARI</span>
            </a>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-header">{{ $header }}</li>
                    @include('menu.' . $menu)
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Your Content Goes Here -->

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
