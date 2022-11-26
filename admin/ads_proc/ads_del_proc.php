<?php
include('../../conn.php');

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM advert WHERE ad_id = '$id'");

if($query) {
  succ('../ads_mng.php','ลบข้อมูลสำเร็จ');
}else {
  err('../ads_mng.php','ลบข้อมูลไม่สำเร็จ');
}