<?php
require("../koneksi.php");
if(isset($_POST['jenis_kamar'])){
    $jenis_kamar = $_POST['jenis_kamar'];
    $harga = $_POST['harga'];
    
    $sql = mysqli_query($dbc,"INSERT INTO kamar VALUES(NULL,'$jenis_kamar','$harga')");    
    if($sql){
        header('location:index.php');
    }
}else{
    header('location.index.php');
}
?>