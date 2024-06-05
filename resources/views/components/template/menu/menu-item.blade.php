<style>
    .nav-link {
        display: flex;
        align-items: center;
        text-decoration: none; /* Menghapus garis bawah pada tautan */
        color: #000; /* Warna teks default */
        padding: 10px 15px; /* Menambahkan padding untuk tata letak yang lebih baik */
    }

    .nav-link i {
        margin-right: 18px;
    }

    .nav-icon {
        margin-left: 30px;
    }

    .nav-link.active {
        background-color: #0b05c5 !important; /* Warna latar belakang untuk item aktif */
        color: #fff !important; /* Warna teks untuk item aktif */
    }

    .nav-link.active i {
        color: #fff !important; /* Warna ikon untuk item aktif */
    }
</style>

{{-- @props(['title', 'url', 'icon']) --}}
<li class="nav-item">
    <a href="{{ url($url) }}" class="nav-link @if ($active) active @endif">
        <i class="{{ $icon }}"></i>
        <p>{{ $title }}</p>
    </a>
</li>
