<?php
require("../koneksi.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $sql = mysqli_query($dbc,"DELETE FROM kamar WHERE id_kamar = $id");
    if($sql){
        header('location:index.php');
    }else{
        //sql gagal
    }
}else{
    header('location:index.php');
}
?>