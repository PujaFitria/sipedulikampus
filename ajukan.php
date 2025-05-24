
<?php 
	$nama = $_POST['nama'];
	$role = $_POST['role'];
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$foto = $_POST['foto'];


	include 'koneksi.php';

	$simpan = $conn->query("insert into tbl_pengaduan(nama, role, judul, deskripsi, foto) values('$nama','$role','$judul','$deskripsi','$foto')");

	if($simpan){
		//echo "Berhasil disimpan ";
		header('Location:http://localhost/sipedulikampus/?menu=3');
	}else{
		echo "Gagal disimpan";
	}
?>
