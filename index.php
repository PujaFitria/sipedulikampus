<?php 
include "header.php";
//Isi atau Content 
//http://localhost/sipedulikampus/index.php
//http://localhost/sipedulikampus/index.php?menu=1
if(isset($_GET['menu'])){
    if($_GET['menu']==2){
        include "pengaduan.php";    
    }else if($_GET['menu']==3){
        include "riwayat.php";
    }else if($_GET['menu']==4){
        include "form_edit.php";
    }else if($_GET['menu']==5){
        include "masuk.php";
    }else if($_GET['menu']==6){
        include "akun.php";
    }else if($_GET['menu']==7){
        include "sop.php";
    }else {
        echo "Pilih Menu";
    }
}else{
    include "home.php";
}
include "footer.php";
?>
