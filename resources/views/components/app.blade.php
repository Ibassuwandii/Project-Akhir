<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YIARI</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ url('public') }}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ url('public') }}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{ url('public') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ url('public') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ url('public') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <x-template.header />
    <x-template.sidebar :menu="$menu" header="{{ $header }}" />
  <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid pt-3">
        {{ $slot }}
      </div>
    </div>
  </div>
  <x-template.control-sidebar />
  <x-template.footer />
</div>
<script src="{{ url('public') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ url('public') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('public') }}/dist/js/adminlte.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="{{ url('public') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('public') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('public') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('public') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ url('public') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ url('public') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ url('public') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ url('public') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ url('public') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ url('public') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ url('public') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ url('public') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wordcloud2.js/1.0.6/wordcloud2.min.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
          "responsive": true, "lengthChange": true, "autoWidth": true,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<head>
    <!-- Other head contents -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<script>
    // JavaScript for Bootstrap's form validation
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script src="sweetalert2.all.min.js"></scrip> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@stack('script')

<!DOCTYPE html>
<html>
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


</body>
</html>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
{{-- <script>
    $(document).ready(function() {
        $('.menu-link').on('click', function() {
            $('.menu-link').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<script>
    // JavaScript untuk menangani klik pada menu
    document.getElementById('menu-link1').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah tindakan default dari tautan
        setActive(this); // Mengatur menu yang aktif
    });

    document.getElementById('menu-link2').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah tindakan default dari tautan
        setActive(this); // Mengatur menu yang aktif
    });

    document.getElementById('menu-link3').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah tindakan default dari tautan
        setActive(this); // Mengatur menu yang aktif
    });

    function setActive(clickedElement) {
        // Menghapus kelas 'active' dari semua menu lain
        var menuItems = document.querySelectorAll('.nav-item a');
        menuItems.forEach(function(item) {
            item.classList.remove('active');
        });

        // Menambahkan kelas 'active' ke menu yang diklik
        clickedElement.classList.add('active');
    }
</script> --}}
