<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>sipedulikampus</title>
</head>
    
<!-- Navbar -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
<div class="col-md-12">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #104c40">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold ms-5" href="#">
        <img src="img/uin.png" alt="logo" width="40" height="34"> SI-Peduli Kampus
    </a>
    <a class=" btn text-light fs-6 ms-2" style="background-color: #d1a446" href="?menu=5">Masuk</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html"><i class="bi bi-house"></i> Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pengaduan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="pengaduan.html">Buat Pengaduan</a></li>
            <li><a class="dropdown-item" href="riwayat.html">Riwayat Pengaduan</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?menu=6"><i class="bi bi-person"></i> Akun</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<p>
<div class="container">
<div class="row justify-content-md-center">

<div class="mt-5">
  <?php
    include 'koneksi.php';

    // Cek koneksi terlebih dahulu
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $data = $conn->query("SELECT * FROM tbl_user");

    // Cek apakah query berhasil dijalankan
    if ($data) {
      while ($row = $data->fetch_assoc()) {
  ?>
  <div class="card mt-5" style="width: 18rem;">
    <h5 class="fs-4 fw-bold text-center mt-2" style="color: #104c40">Profil</h5>
    <img src="img/prita.jpg" width="100" height="100" class="rounded-circle mx-auto mt-1" alt="prita">
    <div class="card-body text-center">
      <label class="btn-sm btn-success">Edit Foto<input type="file" name="file" hidden></label>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><?php echo $row['nama']; ?></li>
      <li class="list-group-item"><?php echo $row['role']; ?></li>
      <li class="list-group-item"><?php echo $row['email']; ?></li>
    </ul>
  </div>
  <?php
      } // tutup while
    } else {
        echo "Gagal menampilkan data: " . $conn->error;
    }
  ?>
</div>
