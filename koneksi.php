<?php
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$dbc = mysqli_connect('localhost','root','','hotel_tos');
?>