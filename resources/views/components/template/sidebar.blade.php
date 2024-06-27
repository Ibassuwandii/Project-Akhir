
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <div class="sidebar">
            <a href="" class="brand-link">
                <img src="{{ url('public') }}/dist/img/logoyiari.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold"> YIARI</span>
            </a>
             <!-- User Panel -->
             <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
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
