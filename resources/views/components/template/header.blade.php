<nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <!-- Left navbar links -->
     <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Tombol Logout -->
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
                <i class="fas fa-sign-out-alt fa-sm"></i>logout<!-- Menggunakan ukuran ikon kecil (sm) -->
            </a>
        </li>

        <!-- Tombol Control Sidebar -->
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
