<?php
include('../../conn.php');

$id = $_GET['id'];
 
$query = mysqli_query($conn, "DELETE FROM post WHERE post_id = '$id'");
if($query) {
  succ('../pub_mng.php','ลบข้อมูลสำเร็จ');
}else {
  err('../pub_mng.php','ลบข้อมูลไม่สำเร็จ');
}