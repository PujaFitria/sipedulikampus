<?php 
//Isi atau Content 
//http://localhost/sipedulikampus/index.html

if(isset($_GET['menu'])){
    if($_GET['menu']==5){
        include "masuk.php";
    }else if($_GET['menu']==6){
        include "akun.php";
    }else {
        echo "Pilih Menu";
    }
}else{   
}
?>
