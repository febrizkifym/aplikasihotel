<?php
require("../koneksi.php");
if($_GET['id']){
    $id = $_GET['id'];
    
    $sql = mysqli_query($dbc,"DELETE FROM pengunjung WHERE id_pengunjung = $id");
    if($sql){
        header('location:index.php');
    }else{
        //sql gagal
    }
}else{
    header('location:index.php');
}
?>