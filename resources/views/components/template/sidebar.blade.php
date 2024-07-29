
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <div class="sidebar">
            <a href="" class="brand-link">
                <img src="{{ url('public') }}/dist/img/logoyiari.png" alt="AdminLTE Logo" class="brand-image img-circle">
                <span class="brand-text font-weight-bold"> YIARI</span>
            </a>
             <!-- User Panel -->
             <div class="user-panel mt-2 pb-2 mb-2 d-flex align-items-center">
                <div class="image">
                    @if (auth()->user()->file_foto)
                        <img src="{{ url('public') }}/{{ auth()->user()->file_foto }}" class="img-circle elevation-2" alt="User Image" style="width: 42px; height: 42px;">
                    @else
                        <img src="{{ url('public/dist/img/default.png') }}" class="img-circle elevation-2" alt="Default User Image">
                    @endif
                </div>
                <div class="info">
                    <a href="#" class="brand-text font-weight-bold">{{ auth()->user()->nama }}</a>
                </div>
            </div>
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
