<?php
require("../koneksi.php");
if(isset($_POST['id_pengunjung'])){
    $id_pengunjung = $_POST['id_pengunjung'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $no_telp = $_POST['no_telp'];
    
    $sql = mysqli_query($dbc,"UPDATE pengunjung SET nama = '$nama', alamat = '$alamat', jk = '$jk', no_telp = '$no_telp' WHERE id_pengunjung = $id_pengunjung");    
    if($sql){
        header('location:index.php');
    }
}else{
    header('location.index.php');
}
?>