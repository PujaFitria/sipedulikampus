<?php
    $email = $_POST['email'];
	$pass = $_POST['pass'];

	include 'koneksi.php';

	$simpan = $conn->query("insert into tbl_masuk(email, pass) values('$email','$pass')");

	if($simpan){
		//echo "Berhasil disimpan ";
		header('Location:http://localhost/proyek/?menu=1');
	}else{
		echo "Gagal disimpan";
	}
?>