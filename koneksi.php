<?php
session_start();
$dbc = mysqli_connect('localhost','root','','hotel_tos');

if(!$dbc){
    die($dbc);
}
?>