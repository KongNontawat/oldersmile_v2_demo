<?php

session_start();
date_default_timezone_set('Asia/Bangkok');
// error_reporting(E_ALL);


$host = 'localhost';
$user = 'root';
$pass = '12345678';
$dbname = 'oldersmile_v2_demo';

$conn = mysqli_connect($host, $user, $pass, $dbname);
mysqli_query($conn, "SET NAMES UTF8");

$my_id = (isset($_SESSION['my_id'])) ?$_SESSION['my_id'] :2 ;

function succ($path='', $msg='สำเร็จ..') {
    $_SESSION['succ'] = $msg;
    header('location:'.$path);
}
function err($path='', $msg='ไม่สำเร็จ..') {
    $_SESSION['err'] = $msg;
    header('location:'.$path);
}

