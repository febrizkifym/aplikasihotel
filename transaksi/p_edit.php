<?php
require("../koneksi.php");
if(isset($_POST['id_transaksi'])){
    $id_transaksi = $_POST['id_transaksi'];
    $id_pengunjung = $_POST['id_pengunjung'];
    $id_kamar = $_POST['id_kamar'];
    $tgl_ci = $_POST['tgl_ci'];
    
    $sql = mysqli_query($dbc,"UPDATE transaksi SET id_pengunjung = '$id_pengunjung', id_kamar = '$id_kamar', tgl_ci = '$tgl_ci' WHERE id_transaksi = $id_transaksi");    
    if($sql){
        header('location:index.php');
    }
}else{
    header('location.index.php');
}
?>