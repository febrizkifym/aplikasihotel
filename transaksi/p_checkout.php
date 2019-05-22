<?php
require("../koneksi.php");
if(isset($_POST['id_transaksi'])){
    $id_transaksi = $_POST['id_transaksi'];
    $id_pengunjung = $_POST['id_pengunjung'];
    $id_kamar = $_POST['id_kamar'];
    $tgl_ci = $_POST['tgl_ci'];
    $tgl_co = $_POST['tgl_co'];
    $bayar = $_POST['bayar'];
    
    $sql = mysqli_query($dbc,"UPDATE transaksi SET id_pengunjung = '$id_pengunjung', id_kamar = '$id_kamar', tgl_ci = '$tgl_ci', tgl_co = '$tgl_co', bayar = '$bayar' WHERE id_transaksi = $id_transaksi");    
    if($sql){
        header('location:index.php');
    }
}else{
    header('location.index.php');
}
?>