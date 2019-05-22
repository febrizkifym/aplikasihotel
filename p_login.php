<?php
require("koneksi.php");
if(isset($_POST['username'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    $sql = mysqli_query($dbc,"SELECT * FROM user WHERE username = '$user' AND password = '$pass'");
    $cek = mysqli_num_rows($sql);
    if($cek){
        while($r = mysqli_fetch_assoc($sql)){
            $_SESSION['username'] = $r['username'];
        }
        header('location:dashboard.php');
    }else{
        header('location:index.php');
    }
}else{
    header('location:index.php');
}
?>