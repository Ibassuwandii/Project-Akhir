<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YIARI | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom styles -->
  <style>
    body {
      background: url('background-image.jpg') no-repeat center center fixed; /* Ganti dengan URL gambar latar belakang Anda */
      background-size: cover;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .overlay {
      background-color: rgba(0, 0, 0, 0.5); /* Warna overlay */
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    .login-box {
      position: relative;
      z-index: 1;
      color: #fff;
      text-align: center;
    }
    .card {
      border: none;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.9);
      box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #130489; /* Warna header */
      border-bottom: none;
    }
    .card-header a {
      color: #fff;
      font-size: 2rem;
      font-weight: bold;
      text-decoration: none;
    }
    .card-body {
      padding: 30px;
    }
    .form-control {
      border: 1px solid #033354;
      border-radius: 5px;
      padding: 15px; /* Penambahan padding */
    }
    .btn-primary {
      background-color: #130489; /* Warna tombol Sign In */
      border: none;
      border-radius: 5px;
      transition: all 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #0056b3; /* Warna tombol Sign In saat hover */
    }
    .alert {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<div class="overlay"></div>
<div class="login-box">
  <div class="card">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Yiari</b>KTG</a>
    </div>
    <div class="card-body">
        <p class="login-box-msg" style="color: black; font-weight: bold;">Sign in to start your session</p>

      <!-- Notifikasi Gagal Login -->
      @if (isset($message))
      <div id="errorAlert" class="alert alert-danger">
        {{$message}}
      </div>
      @endif

      <!-- Form login Anda -->
      <form action="{{url('/login')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="userid" class="form-control" placeholder="Email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text" onclick="togglePasswordVisibility()">
              <span id="eye">
                <i class="fa fa-eye-slash" aria-hidden="true"></i>
              </span>
            </div>
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  function togglePasswordVisibility() {
    var x = document.getElementById("password");
    var y = document.getElementById("eye");

    if (x.type === "password") {
      x.type = "text";
      y.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
    } else {
      x.type = "password";
      y.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
    }
  }

  // Menghilangkan notifikasi setelah beberapa detik
  setTimeout(function() {
    $('#errorAlert').fadeOut('slow');
  }, 2000); // Waktu dalam milidetik (2 detik)
</script>
</body>
</html>
