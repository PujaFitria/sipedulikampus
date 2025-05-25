
<?php 
include "header.html";
//Isi atau Content 
//http://localhost/sipedulikampus/index.html

if(isset($_GET['menu'])){
    if($_GET['menu']==5){
        include "masuk.php";
    }else if($_GET['menu']==6){
        include "akun.php";
    }else if($_GET['menu']==7){
        include "sop.php";
    }else {
        echo "Pilih Menu";
    }
}else{
    
}
include "footer.php";
?>
