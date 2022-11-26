<?php
include('../../conn.php');

$cat_id = $_POST['cat_id'];
$cat_name = $_POST['cat_name'];

$query = mysqli_query($conn, "UPDATE category SET cat_name = '$cat_name' WHERE cat_id = '$cat_id'");

if($query) {
  succ('../cat_mng.php','แก้ไขข้อมูลสำเร็จ');
}else {
  err('../cat_mng.php','แก้ไขข้อมูลไม่สำเร็จ');
}