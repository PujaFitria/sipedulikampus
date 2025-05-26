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
