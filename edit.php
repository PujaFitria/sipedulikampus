<?php
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $bahan = $_POST['bahan'];
    $cara = $_POST['cara'];
    $rasa = $_POST['rasa'];

    include 'koneksi.php';

    $update = $conn->query("update tbl_resapi set judul='$judul',
        bahan = '$bahan', 
        cara = '$cara', 
        rasa = '$rasa' where id = '$id'");

    if($update){
        //echo "Berhasil disimpan ";
        header('Location:http://localhost/proyek/?menu=3');
    }else{
        echo "Gagal diedit";
    }
?>