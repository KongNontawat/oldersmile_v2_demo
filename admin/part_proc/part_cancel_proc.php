<?php
include('../../conn.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "UPDATE partner SET part_status = 2 WHERE part_id = '$id'");

if($query) {
  succ('../part_mng.php','ยกเลิกสำเร็จ');
}else {
  err('../part_mng.php','ยกเลิกไม่สำเร็จ');
}