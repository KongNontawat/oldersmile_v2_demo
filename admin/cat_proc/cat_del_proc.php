<?php
include('../../conn.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM category WHERE cat_id = '$id'");

if($query) {
  succ('../cat_mng.php','ลบข้อมูลสำเร็จ');
}else {
  err('../cat_mng.php','ลบข้อมูลไม่สำเร็จ');
}