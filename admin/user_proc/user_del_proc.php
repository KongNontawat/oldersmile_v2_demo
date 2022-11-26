<?php
include('../../conn.php');

$id = $_GET['id'];
 
$query = mysqli_query($conn, "DELETE FROM user WHERE user_id = '$id'");
if($query) {
  succ('../user_mng.php','ลบข้อมูลสำเร็จ');
}else {
  err('../user_mng.php','ลบข้อมูลไม่สำเร็จ');
}