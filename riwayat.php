<div class="mt-5">
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">Riwayat Pengaduan</h5>
            <table class="table table-bordered">
                <thead class="bg-success">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Role</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <?php
                   include 'koneksi.php';
                   $data = $conn->query("select * from tbl_pengaduan");
                ?>
                <tbody>
                    <?php
                      $no =1;
                      while($row=$data->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['role']; ?></td>
                        <td><?php echo $row['judul']; ?></td>
                        <td><?php echo $row['deskripsi']; ?></td>
                        <td><?php echo $row['foto']; ?></td>
                    </tr>
                    <?php
                      $no++;
                      }
                    ?>
                </tbody>
            </table>   
        </div>
    </div>
</div>