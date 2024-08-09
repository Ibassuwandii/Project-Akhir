{{-- <x-template.menu.menu-item title="Dashboard" url="divisi/comdev/dashboard" icon="fas fa-home" /> --}}
<li class="nav-item menu">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Master Data
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <x-template.menu.menu-item title="Pegawai" url="admin/master-data/pegawai" icon="circle" />
      <x-template.menu.menu-item title="Module" url="admin/master-data/module" icon="circle" />

    </ul>
  </li>
</ul>
</nav>

