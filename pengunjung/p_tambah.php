<?php
require("../koneksi.php");
if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $no_telp = $_POST['no_telp'];
    
    $sql = mysqli_query($dbc,"INSERT INTO pengunjung VALUES(NULL,'$nama','$alamat','$jk','$no_telp')");    
    if($sql){
        header('location:index.php');
    }
}else{
    header('location.index.php');
}
?>