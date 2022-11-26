<?php
include('../../conn.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "UPDATE advert SET ad_status = 2 WHERE ad_id = '$id'");

if($query) {
  succ('../ad_mng.php','ยกเลิกสำเร็จ');
}else {
  err('../ad_mng.php','ยกเลิกไม่สำเร็จ');
}