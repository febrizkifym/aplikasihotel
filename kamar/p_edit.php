<?php
require("../koneksi.php");
if(isset($_POST['id_kamar'])){
    $id_kamar = $_POST['id_kamar'];
    $jenis_kamar = $_POST['jenis_kamar'];
    $harga = $_POST['harga'];
    
    $sql = mysqli_query($dbc,"UPDATE kamar SET jenis_kamar = '$jenis_kamar' , harga = '$harga' WHERE id_kamar = $id_kamar");    
    if($sql){
        header('location:index.php');
    }
}else{
    header('location.index.php');
}
?>