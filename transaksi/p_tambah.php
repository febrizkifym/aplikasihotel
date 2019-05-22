<?php
require("../koneksi.php");
if(isset($_POST['id_pengunjung'])){
    $id_pengunjung = $_POST['id_pengunjung'];
    $id_kamar = $_POST['id_kamar'];
    $tgl_ci = $_POST['tgl_ci'];
    
    $sql = mysqli_query($dbc,"INSERT INTO transaksi VALUES(NULL,'$id_pengunjung','$id_kamar','$tgl_ci',NULL,NULL)");    
    if($sql){
        header('location:index.php');
    }
}else{
    header('location:index.php');
}
?>