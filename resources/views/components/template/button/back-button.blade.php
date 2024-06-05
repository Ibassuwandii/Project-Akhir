<style>
    /* Sesuaikan warna sesuai kebutuhan */
    .custom-btn {
        padding: 5px 10px; /* Sesuaikan padding sesuai kebutuhan */
        font-size: 13px; /* Sesuaikan ukuran font sesuai kebutuhan */
    }

    /* Mengatur warna tombol sesuai kelas yang diberikan */
    .btn-primary.custom-btn {
        background-color: #008B8B; /* Warna latar belakang */
        color: white; /* Warna teks */
        border-color: white; /* Warna border */
    }

    /* Gaya tambahan untuk tombol kembali */
    .btn-primary.custom-btn:hover {
        background-color: black; /* Warna latar belakang saat dihover */
        border-color: black; Warna border saat dihover
    }
</style>

<a href="{{ url($url)}}" class="btn btn-primary custom-btn"> <!-- Menambahkan kelas custom-btn untuk gaya tambahan -->
    <i class="fa fa-arrow-left"></i> Kembali
</a>
