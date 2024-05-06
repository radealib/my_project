<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    Library Goals | Aplikasi Kinerja
  </title>
  <!-- Icon -->
  <!-- <script src="https://unpkg.com/feather-icons"></script> -->
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style2.css" />
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar">
    <a href="#" class="navbar-logo">Library<span>Goals</span></a>
    <div class="navbar-nav">
      <a href="#kegunaan">Kegunaan</a>
      <a href="#Fitur">Fitur</a>
      <a href="#Testimoni">Testimoni</a>
    </div>

    <div class="navbar-nav">
      <a href="#login">Sign in </a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Hero Section -->
  <section class="hero" id="home">
    <main class="content">
      <h2 align="left">Kemudahan dalam Satu Aplikasi Ketahui Capaian Kinerjamu </h2>
      <p style="color: black" align="left">
        <b>
          Dengan satu Aplikasi, kita dapat mengetahui capaian kinerja
          semua divisi Perpustakaan, agar dapat terpantau
          seluruh evaluasi dan proyeksi berikutnya.
        </b>
      </p>
      <a href="#" class="cta">Bergabung Sekarang</a>
    </main>
  </section>
  <section id="login" class="login">
    <h2><span>Login Aplikasi</span></h2>
    <div class="row">
      <form action="../my_project/conf/autentikasi.php" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Username" name="username">
        </div>
        <div class="input-group">
          <input type="password" class="form-control" placeholder="Password" name='password'>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Log In</button>
      </form>
    </div>
  </section>
</body>
<?php
$x = isset($_GET['error']);
if ($x == 1) {
  echo "
  <script>
  var Toast = Swal.mixin({
    toast: true,
    position: 'center-top',
    showConfirmButton: false,
    timer: 3000
  });
  Toast.fire({
    icon: 'warning',
    title: 'Gagal Login Guys.',
  })
  </script>";
} else {
  echo '';
}
?>

</html>