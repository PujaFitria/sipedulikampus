<?php
    $id_hapus = $_GET['id_hapus'];
    echo "ID Data Yang Akan di Hapus ". $id_hapus."<br>";
    include "koneksi.php";
    $delete = $conn->query("delete from tbl_resapi where id = '$id_hapus'");
    if($delete){
        header('Location: '. $_SERVER['HTTP_REFERER']);
    }else{
        echo "Data Gagal di Hapus";
    }

    $id_hapus = $_GET['id_hapus'];
    echo "ID Data Yang Akan di Hapus ". $id_hapus."<br>";
    include "koneksi.php";
    $delete = $conn->query("delete from tbl_masuk where id = '$id_hapus'");
    if($delete){
        header('Location: '. $_SERVER['HTTP_REFERER']);
    }else{
        echo "Data Gagal di Hapus";
    }
?>