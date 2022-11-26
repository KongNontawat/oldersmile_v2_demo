<?php
include('../../conn.php');

$cat_name = $_POST['cat_name'];


$query = mysqli_query($conn, "INSERT INTO category VALUES('','$cat_name')");

if($query) {
  succ('../cat_mng.php','บันทึกข้อมูลสำเร็จ');
}else {
  err('../cat_mng.php','บันทึกข้อมูลไม่สำเร็จ');
}